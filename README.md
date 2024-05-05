# Wi Cloud

![WiCloud](https://github.com/nitishkumar3/wi-cloud/assets/77057838/526bfc4e-405a-40a4-8325-c41e1a7be223)

Wi-Cloud is a lightweight script for creating a Local Wireless Cloud Server, accessible via any modern web browser. With this script, you can easily store and access files across a network. By setting up a basic Apache or Nginx server and installing Wi-Cloud, you can create your own home media server.

## Installation

- Set up an Apache / Nginx Webserver and Install PHP. Alternatively use XAMPP for easy setup.
- Copy Script files to htdocs.
- Allow Firewall access and Open port 80.
- Spin up the PHP Server.
- Get the Local Public IP of the machine. Use the following command in Terminal, Windows - "ipconfig", Linux and Mac - "ifconfig".
- Connect other devices to the same Network and Use the IP Address to access Dashboard where the files could be managed.


# Wi-Cloud

Wi-Cloud is a lightweight script for creating a local wireless cloud server that's accessible via any modern web browser. With this script, you can easily store and access files across a network. By setting up a basic Apache or Nginx server and installing Wi-Cloud, you can create your own home media server.

## Installation

To get started, follow these steps:

1. **Set Up a Web Server**
   - Install an Apache or Nginx web server with PHP support. If you want an easier setup, you can use XAMPP, which includes Apache, PHP, and other components in one package.
   
2. **Copy Script Files to the Web Server**
   - Copy the Wi-Cloud script files to the server's document root directory. If you're using XAMPP, the document root is typically the `htdocs` folder.

3. **Configure Firewall and Ports**
   - Ensure that your firewall allows traffic on port 80 (HTTP). If you're using a different port, update the server configuration accordingly.

4. **Start the Web Server**
   - If you're using XAMPP, start the Apache server through the XAMPP Control Panel. For other setups, start Apache or Nginx using your system's service manager or terminal commands.

5. **Find Your Local IP Address**
   - To find your local IP address, open a terminal or command prompt and use the following command:
     - **Windows:** `ipconfig`
     - **Linux and Mac:** `ifconfig`
   - Look for the "IPv4 Address" or "inet" to get your local IP.

6. **Connect Other Devices**
   - Make sure all devices you want to connect to your Wi-Cloud server are on the same network.
   - Use a web browser on these devices to access your server. Enter the local IP address followed by the appropriate port (if necessary) to reach the Wi-Cloud dashboard, where you can manage your files.

With these steps, you should be able to set up and access your own local wireless cloud server with Wi-Cloud. Enjoy sharing and accessing files across your network!
