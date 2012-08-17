<?php

class Dzinehub_Partsfinder_Model_Mysql4_Parts extends Mage_Core_Model_Mysql4_Abstract
{
	protected function _init()
	{
		$this->_init('partsfinder/parts','id');
	}
}