<?php

$installer = $this;

$installer->startSetup();

$installer->run("
	CREATE TABLE IF NOT EXISTS `{$installer->getTable('partsfinder/parts')}`
	(
		`id` smallint(6) NOT NULL AUTO_INCREMENT,
		`make` varchar(255) NULL,
		`model` TEXT NULL,
		`year` TEXT NULL,
		PRIMARY KEY (`id`)
	);
");

$installer->endSetup();