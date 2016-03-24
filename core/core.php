<?php
// Загрузка классов "на лету"
function __autoload($className) {
	$filename = strtolower($className) . '.php';
	// определяем класс и находим для него путь
	$expArr = explode('_', $className);
	if(empty($expArr[1]) OR $expArr[1] == 'Base'){
		$folder = 'classes';			
	}else{			
		switch(strtolower($expArr[0])){
			case 'controller':
				$folder = 'controllers';	
				break;
				
			case 'model':					
				$folder = 'models';	
				break;
				
			default:
				$folder = 'classes';
				break;
		}
	}
	// путь до класса
	$file = SITE_PATH . $folder . DS . $filename;
	// проверяем наличие файла
	if (file_exists($file) == false) {
		return false;
	}		
	// подключаем файл с классом
	include ($file);
}

// Соединяемся с БД
$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
// запускаем реестр (хранилище)
$registry = new Registry;
// Загружаем router
$router = new Router($registry);
// записываем данные в реестр
$registry->set ('router', $router);
if (isset($dbObject))
$registry->set ('db', $dbObject);
else {echo "Отсутствует подключение к базе данных - ".DB_NAME;die();}
// задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . 'controllers');
// запускаем маршрутизатор
$router->start();