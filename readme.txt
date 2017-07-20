Important Note:

Change your database username and password in dbconfig.php file.


Create Database Using the following Query:

CREATE DATABASE IF NOT EXISTS visit_nepal;


and Create Table either importing attached sql file (visit_nepal.sql) or using the below SQL query:

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

 

