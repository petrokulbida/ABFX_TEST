<?php
// êîíòğîëåğ
Class Controller_Hospital Extends Controller_Base {
	
	// øàáëîí
	public $layouts = "main";
	
	// ıêøåí
	function index() {
		
		$conection = Registry::getConnection();
		$model = new Model_Hospital($conection);
		$pat = $model->getAllPatients($_GET['p']);
		$doc = $model->getAllDoctors($_GET['d']);
		
		$this->template->vars('p', $_GET['p']);
		$this->template->vars('d', $_GET['d']);
		$this->template->vars('pat', $pat);
		$this->template->vars('doc', $doc);
		$this->template->vars('title', 'Hospital');
		$this->template->view('index');
	}
	
	function doctor() {
		
		$conection = Registry::getConnection();
		$model = new Model_Hospital($conection);
		$doc = $model->getDoc($_GET['d']);
		$pat = $model->getPatients($_GET['d']);		
		$this->template->vars('res', $pat);
		$this->template->vars('main', $doc);
		$this->template->vars('own', 'Doctor');
		$this->template->vars('rel', 'Patients');
		$this->template->vars('title', 'Hospital / Doctor with patients');
		$this->template->view('view');
	}
	
	function patient() {
		
		$conection = Registry::getConnection();
		$model = new Model_Hospital($conection);
		$pat = $model->getPat($_GET['p']);
		$doc = $model->getDoctors($_GET['p']);
		$age = explode('-',$pat[0]['dob']);
		$this->template->vars('res', $doc);
		$this->template->vars('main', $pat);
		$this->template->vars('age', $this->getAge($age[0], $age[1], $age[2]));
		$this->template->vars('own', 'Patient');
		$this->template->vars('rel', 'Doctors');
		$this->template->vars('title', 'Hospital / Patient with doctors');
		$this->template->view('view');
	}
	
    function getAge($y, $m, $d) {
	
		if($m > date('m') || $m == date('m') && $d > date('d'))
		  return (date('Y') - $y - 1);
		else
		  return (date('Y') - $y);
    }
}