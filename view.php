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
<title>Wi-Cloud - Manage Files</title>
<meta charset='utf-8'>
<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"> 
<style>
@font-face {font-family: 'Exo';font-style: italic;font-weight: 500;font-display: swap;src: url(fonts/exo.woff2) format('woff2');}
@font-face {font-family: 'Roboto';font-style: normal;font-weight: 400;font-display: swap;src: url(fonts/roboto.woff2) format('woff2');}
@font-face {font-family: 'Rajdhani';font-style: normal;font-weight: 300;font-display: swap;src: url(fonts/rajdhani.woff2) format('woff2');}
@font-face {font-family: 'Poppins';font-style: normal;font-weight: 200;font-display: swap;src: url(fonts/poppins.woff2) format('woff2');}
@font-face {font-family: 'Share Tech Mono';font-style: normal;font-weight: 400;font-display: swap;src: url(fonts/share-tech-mono.woff2) format('woff2');}
.header {font-family: "Poppins", sans-serif;font-size: 15vmin;text-align: center;opacity: 0.4;}
.bg-gradient1 span,.bg-gradient1:before {background: #fa7e29;background: linear-gradient(180deg, #fa7e29 0%, #F6682F 80%, #F6682F 100%);}
.bg-gradient2 span,.bg-gradient2:before {background: #39C2C9;background: linear-gradient(180deg, #39C2C9 0%, #3FC8C9 80%, #3FC8C9 100%);}
.bg-gradient3 span,.bg-gradient3:before {background: #39C2C9;background: linear-gradient(180deg, #45c93e 0%, #40c939 80%, #31cc29 100%);}
a {text-decoration: none;}
a:hover, a:focus, a:active {text-decoration: none;}
.fancy-button {display: inline-block;margin: 20px;font-family: 'Roboto', sans-serif;font-weight: 500;font-size: 16px;letter-spacing: 0.07em;text-transform: uppercase;line-height: 24px;color: #ffffff;position: relative;}
.fancy-button.bg-gradient1 {text-shadow: 0px 0px 1px #227270;}
.fancy-button.bg-gradient2 {text-shadow: 0px 0px 1px #BF4C28;}
.fancy-button.bg-gradient3 {text-shadow: 0px 0px 1px #BF4C28;}
.fancy-button:before {content: "";display: inline-block;height: 40px;position: absolute;bottom: -1px;left: 10px;right: 10px;z-index: -1;border-radius: 2em;filter: blur(14px) brightness(0.9);transform-style: preserve-3d;transition: all 0.3s ease-out;}
.fancy-button span {display: inline-block;padding: 16px 20px;border-radius: 50em;position: relative;z-index: 2;will-change: transform, filter;transform-style: preserve-3d;transition: all 0.3s ease-out;}
.fancy-button:focus {color: #ffffff;}
.fancy-button:hover {color: #ffffff;}
.fancy-button:hover span {filter: brightness(0.9) contrast(1.2);transform: scale(0.96);}
.fancy-button:hover:before {bottom: 3px;filter: blur(6px) brightness(0.8);}
.fancy-button:active span {filter: brightness(0.75) contrast(1.7);}
.snip {border: 1px solid #eee;padding: 1em;width: 70%;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;font-size: 3.2vmin;}
.fname {font-family: 'Exo', sans-serif;}
.emoji {width:3vmin;height:3vmin;}
.foot {font-family: "Share Tech Mono", sans-serif;font-size: 3.5vmin;}
</style>
</head>
<body>
<center>
	<span class="header" style="color:blue;text-align:center;">Wi-Cloud</span><br>
	<a class="fancy-button bg-gradient3" href="/"><span>upload Files</span></a>
	<a class="fancy-button bg-gradient1" href="stats.php"><span>View Stats</span></a><br><br>
	<?php
		$folder = "storage";
		$results = scandir('storage');
		foreach ($results as $result) {
			if ($result === '.' or $result === '..') continue;
				if (is_file($folder . '/' . $result)) {
				echo '
					<div class="snip">
						<table style="width:100%">
							<tr>
								<td>
									<span class="fname">' . $result.'</span>
								</td>
								<td style="text-align:right">
								    <a class="fancy-button bg-gradient3" href="/storage/' . $result.'"><span>View</span></a>
									<a class="fancy-button bg-gradient2" href="/storage/' . $result.'" download><span>Download</span></a>
									<a class="fancy-button bg-gradient1" href="delete.php?name='.$result.'"><span>Delete</span></a>
								</td>
							</tr>
						</table>
					</div>
					<br>
				   ';
				}
			}	
	?>
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