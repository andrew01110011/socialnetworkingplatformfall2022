# Car Enthusiast Social Networking Platform System Design
About the Project:
This is a web based social media platform geared specifically towards car enthusiasts. With these consumers specifically in mind, the platform supports user uploaded high-definition images in a dynamic photo gallery. The social networking platform also includes capabilities for users to comment and reply to peers. The objective of the platform is to provide a convenient, user friendly forum for likeminded car enthusiasts to gather, anywhere in the world with internet connectivity.

Motivation:
Short description of the motivation for the project.

Installation:
List the tools needed to build and use the application/software, a rationale for choosing these tools, and installation steps.

Usage:
Examples of how your application/project works and how it can be used (functional operations). Include essential code snippets and sample execution screenshots.

To Fill:
dbh.inc.php
commentdbh.inc.php

SQL:
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
