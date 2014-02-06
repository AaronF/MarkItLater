# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.33)
# Database: thetechb_rl
# Generation Time: 2014-02-06 10:24:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Member_Groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Member_Groups`;

CREATE TABLE `Member_Groups` (
  `Group_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Group_Name` varchar(225) NOT NULL,
  PRIMARY KEY (`Group_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table Member_Sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Member_Sessions`;

CREATE TABLE `Member_Sessions` (
  `sessionStart` int(11) NOT NULL,
  `sessionData` text NOT NULL,
  `sessionID` varchar(255) NOT NULL,
  PRIMARY KEY (`sessionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table Member_Users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Member_Users`;

CREATE TABLE `Member_Users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ActivationToken` varchar(225) NOT NULL,
  `LastActivationRequest` int(11) NOT NULL,
  `LostPasswordRequest` int(1) NOT NULL DEFAULT '0',
  `Active` int(1) NOT NULL,
  `Group_ID` int(11) NOT NULL,
  `SignUpDate` int(11) NOT NULL,
  `LastSignIn` int(11) NOT NULL,
  `Private` int(1) DEFAULT '0',
  `Newsletter` int(1) DEFAULT '1',
  `User_Key` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table Reading_List
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Reading_List`;

CREATE TABLE `Reading_List` (
  `Item_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Item_Order` int(11) DEFAULT '0',
  `Item_Title` varchar(250) NOT NULL DEFAULT '',
  `Item_Link` varchar(300) NOT NULL DEFAULT '',
  `Date_Time` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
