CREATE DATABASE IF NOT EXISTS`ips`;
USE ips;

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `NAME` varchar(100),
   	`FNAME` varchar(120),
   	`CONTACT` varchar(100),
   	`ROLL` varchar(125),
   	`CLASS` varchar(1000),
   	`ACADFEE` varchar(125),
   	`CONVFEE` varchar(125),
		`ADDRESS` varchar(125),
		`RECEIPT_ACAD` varchar(125),
		`RECEIPT_CONV` varchar(125),
		`CONVEYANCE` varchar(125),
  PRIMARY KEY (id)
) ;