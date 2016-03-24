<?php
// контролер
Class Controller_Drag Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {		
		$this->template->vars('title', 'Drag & Drop');
		$this->template->view('index');
	}
	
}