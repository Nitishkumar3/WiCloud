<!--
Wi-Cloud - Project by Nitishkumar
Email - nitishkumar.blog@gmail.com
Telegram - https://t.me/cyberking3
Instagram - https://www.instagram.com/_cyber_king_003_
Github - https://github.com/iamnkumar
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wi-Cloud - Stats</title>
<meta charset='utf-8'>
<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"> 
<style>
@font-face {font-family: 'Roboto';font-style: normal;font-weight: 400;font-display: swap;src: url(fonts/roboto.woff2) format('woff2');}
@font-face {font-family: 'Rajdhani';font-style: normal;font-weight: 300;font-display: swap;src: url(fonts/rajdhani.woff2) format('woff2');}
@font-face {font-family: 'Poppins';font-style: normal;font-weight: 200;font-display: swap;src: url(fonts/poppins.woff2) format('woff2');}
@font-face {font-family: 'Share Tech Mono';font-style: normal;font-weight: 400;font-display: swap;src: url(fonts/share-tech-mono.woff2) format('woff2');}
.header {font-family: "Poppins", sans-serif;font-size: 15vmin;text-align: center;opacity: 0.4;}
.tab {border: 1px solid #eee;padding: 1em;width: 60%;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;font-size: 3.2vmin;}
.table {display: table;border-collapse: collapse;}
.table .tr {display: table-row;}
.table .tr .td {display: table-cell;padding: 8px;}
.td {font-family: 'Rajdhani', sans-serif;}
.bg-gradient1 span,.bg-gradient1:before {background: #39C2C9;background: linear-gradient(180deg, #45c93e 0%, #40c939 80%, #31cc29 100%);}
.bg-gradient2 span,.bg-gradient2:before {background: #fa7e29;background: linear-gradient(180deg, #fa7e29 0%, #F6682F 80%, #F6682F 100%);}
a {text-decoration: none;}
a:hover, a:focus, a:active {text-decoration: none;}
.fancy-button {display: inline-block;margin: 20px;font-family: 'Roboto', sans-serif;font-weight: 500;font-size: 16px;letter-spacing: 0.07em;text-transform: uppercase;line-height: 24px;color: #ffffff;position: relative;}
.fancy-button.bg-gradient1 {text-shadow: 0px 0px 1px #298025;}
.fancy-button.bg-gradient2 {text-shadow: 0px 0px 1px #BF4C28;}
.fancy-button:before {content: "";display: inline-block;height: 40px;position: absolute;bottom: -1px;left: 10px;right: 10px;z-index: -1;border-radius: 2em;filter: blur(14px) brightness(0.9);transform-style: preserve-3d;transition: all 0.3s ease-out;}
.fancy-button span {display: inline-block;padding: 16px 20px;border-radius: 50em;position: relative;z-index: 2;will-change: transform, filter;transform-style: preserve-3d;transition: all 0.3s ease-out;}
.fancy-button:focus {color: #ffffff;}
.fancy-button:hover {color: #ffffff;}
.fancy-button:hover span {filter: brightness(0.9) contrast(1.2);transform: scale(0.96);}
.fancy-button:hover:before {bottom: 3px;filter: blur(6px) brightness(0.8);}
.fancy-button:active span {filter: brightness(0.75) contrast(1.7);}
.emoji {width:3vmin;height:3vmin;}
.foot {font-family: "Share Tech Mono", sans-serif;font-size: 3.5vmin;}
h3 {font-family: "Share Tech Mono", sans-serif;color:red;}
</style>
<?php
	$max_upload =(int)(ini_get('upload_max_filesize'));
	$memory_limit = (int)ini_get('memory_limit');
	$size = sizeFormat(folderSize("storage"));
	$diskfree = sizeFormat(disk_free_space("/"));
	
	function sizeFormat($bytes){ 
		$kb = 1024;
		$mb = $kb * 1024;
		$gb = $mb * 1024;
		$tb = $gb * 1024;

		if (($bytes >= 0) && ($bytes < $kb)) {return $bytes . ' B';} 
			elseif (($bytes >= $kb) && ($bytes < $mb)) {return  round($bytes / $kb,2) . ' KB';} 
			elseif (($bytes >= $mb) && ($bytes < $gb)) {return round($bytes / $mb,2) . ' MB';} 
			elseif (($bytes >= $gb) && ($bytes < $tb)) {return  round($bytes / $gb,2) . ' GB';} 
			elseif ($bytes >= $tb) {return  round($bytes / $tb,2) . ' TB';} 
		else {return $bytes . ' B';}
	}

	function folderSize($dir){
		$count_size = 0;
		$count = 0;
		$dir_array = scandir("$dir");
		
		foreach($dir_array as $key=>$filename){
			if($filename!=".." && $filename!="."){
				if(is_dir($dir."/".$filename)){
					$new_foldersize = foldersize($dir."/".$filename);
					$count_size = $count_size+ $new_foldersize;
				}
				else if(is_file($dir."/".$filename)){
					$count_size = $count_size + filesize($dir."/".$filename);
					$count++;
				}
			}
		}
	return $count_size;
	}

	function alertmfs(){
		if((int)(ini_get('upload_max_filesize')) <= 128 && (int)(ini_get('post_max_filesize'))<= 128){
			echo '<h3>Alert: Max File Size Limit is Low. <a href="">Click to Solve</a></h3>';
		}
	}
	
	function alertfs(){
		if(disk_free_space("/") <= 536870912){
			echo "<h3>Alert: Free Space is Less than 512 MB.</h3>";
		}
	}	
?>
</head>
<body>
<center>
   <span class="header" style="color:blue;">Wi-Cloud</span><br>
   <a class="fancy-button bg-gradient1" href="/"><span>Upload Files</span></a>
   <a class="fancy-button bg-gradient2" href="view.php"><span>Manage Files</span></a><br><br>
  <?php alertmfs() ?> <?php alertfs() ?>
    <div class="tab">
      <div class="table">
         <div class="tr">
            <div class="td"><b>Server Address</b></div>
         </div>
         <div class="tr">
            <div class="td">
				<?php echo $_SERVER['SERVER_ADDR']; ?>
            </div>
         </div>
      </div>
    </div>
	<br>
    <div class="tab">
      <div class="table">
         <div class="tr">
            <div class="td"><b>Storage Used</b></div>
            <div class="td"></div>
            <div class="td"><b>Free Disk</b></div>
         </div>
         <div class="tr">
            <div class="td">
				<?php echo "$size"; ?>
            </div>
            <div class="td"></div>
            <div class="td">
				<?php echo "$diskfree"; ?>
            </div>
         </div>
      </div>
    </div>
    <br>
    <div class="tab">
      <div class="table">
         <div class="tr">
            <div class="td"><b>Max File Size Limit</b></div>
            <div class="td"></div>
            <div class="td"><b>PHP Version</b></div>
         </div>
         <div class="tr">
            <div class="td">
				<?php echo "$max_upload MB"; ?>
            </div>
            <div class="td"></div>
            <div class="td">
				<?php echo phpversion(); ?>
            </div>
         </div>
      </div>
    </div>
    <br><br>
	<span class="foot"><Code>&lt;</Code>Coded<Code>&gt;</Code> by Nitishkumar</span><br>
	<span class="icons">
		<a href="mailto:nitishkumar.blog@gmail.com" target="_blank"><img class="emoji" src="./images/mail.png" alt="mail"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://t.me/cyberking3" target="_blank"><img class="emoji" src="./images/telegram.png" alt="telegram"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://www.instagram.com/_cyber_king_003_" target="_blank"><img class="emoji" src="./images/instagram.png" alt="instagram"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://github.com/iamnkumar" target="_blank"><img class="emoji" src="./images/github.png" alt="github"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="info.html" target="_blank"><img class="emoji" src="./images/info.svg" alt="info"></a>
	</span>
</center>
</body>
</html>