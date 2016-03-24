<?php
// абстрактый класс модели
Abstract Class Model_Base {

	public $db;
	
	function __construct($con) {
		$this->db = $con;
	}
	
}