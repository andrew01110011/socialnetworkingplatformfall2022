# Car Enthusiast Social Networking Platform System Design
About the Project:  
This is a web based social media platform geared specifically towards car enthusiasts. With these consumers specifically in mind, the platform supports user uploaded high-definition images in a dynamic photo gallery. The social networking platform also includes capabilities for users to comment and reply to peers. The objective of the platform is to provide a convenient, user friendly forum for likeminded car enthusiasts to gather, anywhere in the world with internet connectivity.

Motivation:  
Short description of the motivation for the project.

Installation:  
1. Setup a PHP development environment / webserver. For this installation example we will chose to use XAMPP.
2. Download XAMPP from https://www.apachefriends.org.
3. Install XAMPP using the downloaded installer.
4. Boot your XAMPP manager application and click "Open Application Folder". Alternatively, navigate to  your "xamppfiles" directory.
5. Open the "htdocs" directory within the "xamppfiles" directory.
6. Paste the contents of this GitHub repo inside of the "htdocs" directory.

Configuration:
1. In the XAMPP manager application start the "Apache Web Server" and "MySQL Database".
2. In a web browser of your choice navagate to XAMPP's phpMyAdmin url (for me this url is "http://my-computers-name-on-local-network.local/phpmyadmin/").
3. Create a new database.
4. Enter your newly created database and click the "SQL" button to run SQL query/queries on your database.
5. Paste the following queries:  
    CREATE TABLE users (
    idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    usernameUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL,
    roleUsers int(11) NOT NULL
    );  
    CREATE TABLE comments1 (
    cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    date datetime not null,
    message text not null
    );
6. Click "Go" to input queries to database.
7. Open files: "commentdbh.inc.php", and "dbh.inc.php". Input your servername (likley "localhost") to "$dBServername = ", database username (likley "root") to "$dBUsername = ", database password if you chose to set one on phpMyAdmin to "$dBPassword = ", and name of your database to "$dBName = ". Do the following for both files.

Website Admin Configuration:
1. Navagate to the configured website's url (for me this is "localhost")
2. Click the "Signup" button on the top right of the webpage.
3. Fill out the form will infomation you want for admin user.
4. Create account by clicking the "Signup" button.
5. Navagate to XAMPP's phpMyAdmin url (for me this url is "http://my-computers-name-on-local-network.local/phpmyadmin/").
6. Enter your database and then enter your "users" table.
7. Click the "Edit" button to the left of the newly created admin user.
8. Change the "roleUsers" value from "1" or "2" to "3". Click "Go" to save change.
9. This user is now an admin on the website and can remove other users comments.

Usage:  
Examples of how your application/project works and how it can be used (functional operations). Include essential code snippets and sample execution screenshots.
