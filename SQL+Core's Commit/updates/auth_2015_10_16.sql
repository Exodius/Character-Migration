ALTER TABLE `account_transfer_blacklist` ADD COLUMN `b_realmName` CHAR(255) DEFAULT '' NULL AFTER `b_address`, ADD COLUMN `b_url` CHAR(255) DEFAULT '' NULL AFTER `b_realmName`; 

RENAME TABLE `account_transfer_whitelist` TO `account_transfer_slots`; 