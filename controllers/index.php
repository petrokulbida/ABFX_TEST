<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {
		$conection = Registry::getConnection();
		$model = new Model_Category($conection);
		$category = $model->getAll();
		
		$this->template->vars('title', 'Categories');
		$this->template->vars('category', $category);
		$this->template->view('index');
	}
	
}