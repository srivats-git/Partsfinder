<?php

class Dzinehub_Partsfinder_Model_Mysql4_Parts_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	public function __construct()
	{
		parent::__construct();
		$this->__init('partsfinder/parts');
	}
}