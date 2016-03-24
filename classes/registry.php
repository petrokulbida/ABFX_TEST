<?php
// Класс хранилища
Class Registry {

	private $vars = array();
	static $db;
	
	// запись данных
	function set($key, $var) {
        if (isset($this->vars[$key]) == true) {
			throw new Exception('Unable to set var `' . $key . '`. Already set.');
        }
		if ($key === 'db') self::$db = $var;
		
        $this->vars[$key] = $var;
        return true;
	}

	// получение данных
	function get($key) {
		if (isset($this->vars[$key]) == false) {
			return null;
		}
		return $this->vars[$key];
	}
	
	// получение объекта PDO
	public static function getConnection(){		
		return self::$db ? self::$db : false;
	}
	// удаление данных
	function remove($var) {
		unset($this->vars[$key]);
	}

}
