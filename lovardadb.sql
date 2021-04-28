CREATE DATABASE `lovarda`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `lovarda`;

CREATE TABLE `regfelhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `beerkezouzenetek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `targy` varchar(45) NOT NULL,
  `uzenet` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
)
ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

