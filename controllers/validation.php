<?php
// контролер
Class Controller_Validation Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {		
		$this->template->vars('title', 'Validation');
		$this->template->view('index');
	}
	
}