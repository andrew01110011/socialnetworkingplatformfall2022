# socialnetworkingplatformfall2022

Project Title/About the Project
Provide an overview of what the project is about.

Motivation
Short description of the motivation for the project.

Installation
List the tools needed to build and use the application/software, 
a rationale for choosing these tools, 
and installation steps.

Usage
Examples of how your application/project works and how it can be used (functional operations).
Include essential code snippets and sample execution screenshots.

Roadmap/Features (Optional)
Provide a list of existing issues and proposed improvements/features.

Contact
Your name:

https://www.makeareadme.com/

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
