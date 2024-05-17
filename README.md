Create database
CREATE DATABASE `login`;

USE DATABASE `login`;

CREATE TABLE `members` (
`id` int(4) NOT NULL auto_increment,
`username` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
`email` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
);
