ALTER TABLE `account_transfer_whitelist` ADD COLUMN `type` TINYINT(8) DEFAULT 0 NOT NULL COMMENT 'Type of transfer' AFTER `account`;
