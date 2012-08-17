<?php


$installer = $this;

$installer->startSetup();

$installer-run("
	CREATE TABLE IF NOT EXISTS `{$installer->getTable('partsfinder/parts')}`
	(
		`id` small_init(6) NOT_NULL AUTOINCREMENT,
		`make` varchar(255) NULL,
		`model` MEDIUMTEXT NULL,
		`year` MEDIUMTEXT NULL,
		PRIMARY_KEY(`id`)
	);
");

$installer->endSetup();