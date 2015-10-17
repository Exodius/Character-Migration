

-- Comment it -- if not 1st time use this SQL
-- DO NOT FORGET CHANGE TO "0" TO WHICH REALM YOU DON`T WANT MAKE AVAIBLE 
ALTER TABLE `realmlist` ADD COLUMN `TransferAvailable` INT(1) DEFAULT 1 NULL AFTER `gamebuild`;

DROP TABLE IF EXISTS `account_transfer_slots`;
CREATE TABLE `account_transfer_slots` (
  `account` int(11) NOT NULL DEFAULT '0' COMMENT 'Account id',
  `type` tinyint(8) NOT NULL DEFAULT '0' COMMENT 'Type of transfer',
  `quantity` tinyint(8) DEFAULT '0' COMMENT 'Limit transfer quantity for this account',
  PRIMARY KEY (`account`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `account_transfer`;

CREATE TABLE `account_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
  `cStatus` tinyint(1) DEFAULT NULL,
  `cDump` mediumtext,
  `cNameOLD` char(16) NOT NULL DEFAULT '',
  `cNameNEW` char(16) NOT NULL DEFAULT '',
  `cAccount` int(11) unsigned NOT NULL DEFAULT '0',
  `gmAccount` int(11) unsigned NOT NULL DEFAULT '0',
  `cRealm` int(2) unsigned NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_checked` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cItemRow` mediumtext,
  `oPassword` varchar(255) DEFAULT NULL,
  `oAccount` char(16) NOT NULL DEFAULT '',
  `oServer` text,
  `oRealm` varchar(32) DEFAULT NULL,
  `oRealmlist` text,
  `addonVersion` text,
  `GUID` int(11) unsigned NOT NULL DEFAULT '0',
  `Reason` text,
  `tType` tinyint(8) NOT NULL DEFAULT '0' COMMENT 'Type of transfer',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2194 DEFAULT CHARSET=utf8;


-- FOR COMMENTS
-- ALTER TABLE `account_transfer` ADD COLUMN `Reason` TEXT AFTER `GUID`;
UPDATE `account_transfer` SET `Reason` = "Not meet requirements";


-- OPTION: ONE CHARNAME PER 1 REALMNAME, for disable:
/* ALTER TABLE `account_transfer` ENGINE = INNODB;
CREATE UNIQUE INDEX `idx_name_realm` ON `account_transfer`(`cNameOLD`,`oRealm`); */

DROP TABLE IF EXISTS `account_transfer_blacklist`;
CREATE TABLE `account_transfer_blacklist` (
  `b_address` CHAR(255) NOT NULL DEFAULT '',
   PRIMARY KEY (`b_address`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;
-- EXAMPLE HOW TO FEEL BLACKLIST
INSERT INTO `account_transfer_blacklist` VALUES ("localhost"),("127.0.0.1");

DROP TABLE IF EXISTS `account_transfer_queue`;
CREATE TABLE `account_transfer_queue` (
  `id`     INT(11) NOT NULL,
  `Realm1` INT(2) NOT NULL DEFAULT 0,
  `Realm2` INT(2) NOT NULL DEFAULT 0,
  `Realm3` INT(2) NOT NULL DEFAULT 0,
  `Realm4` INT(2) NOT NULL DEFAULT 0,
  `Realm5` INT(2) NOT NULL DEFAULT 0,
   PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `account_transfer_guid`;
CREATE TABLE `account_transfer_guid` (
  `Realm1` INT(11) NOT NULL DEFAULT 0,
  `Realm2` INT(11) NOT NULL DEFAULT 0,
  `Realm3` INT(11) NOT NULL DEFAULT 0,
  `Realm4` INT(11) NOT NULL DEFAULT 0,
  `Realm5` INT(11) NOT NULL DEFAULT 0
) ENGINE=MYISAM DEFAULT CHARSET=utf8;


-- DO NOT TOUCH THAT!
INSERT INTO `account_transfer_guid` VALUES (0, 0, 0, 0, 0);
-- Delete not existed gm acccess
DELETE FROM `account_access` WHERE `id` NOT IN (SELECT `id` FROM `account`);
