CREATE DATABASE thelocaltheatre;

use thelocaltheatre;

CREATE TABLE `thelocaltheatre`.`users` ( `userID` INT NOT NULL AUTO_INCREMENT ,  `firstName` VARCHAR(25) NOT NULL ,  `lastName` VARCHAR(25) NOT NULL ,  `username` VARCHAR(50) NOT NULL ,  `email` VARCHAR(100) NOT NULL ,  `password` VARCHAR(250) NOT NULL ,  `signUpDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `isSubscribed` TINYINT NOT NULL DEFAULT '0' ,    PRIMARY KEY  (`userID`)) ENGINE = InnoDB;

CREATE TABLE `thelocaltheatre`.`contact` ( `email` VARCHAR(100) NOT NULL ,  `address` VARCHAR(200) NOT NULL ,  `tpNumber` VARCHAR(25) NOT NULL ) ENGINE = InnoDB;