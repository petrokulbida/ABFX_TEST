<?php
// включим отображение всех ошибок
Error_Reporting(E_ALL & ~E_NOTICE);
// подключаем конфиг
include ('/config/config.php'); 
// подключаем ядро сайта
include (SITE_PATH . DS . 'core' . DS . 'core.php'); 
