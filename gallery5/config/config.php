<?php 

define('SITE_ROOT',__DIR__ . "/../"); // корень сайта
define('WWW_ROOT', SITE_ROOT . 'public_html/'); 
define('DATA_DIR', SITE_ROOT . 'data/');
define('TPL_DIR', SITE_ROOT . 'templates/');
define('ENG_DIR', SITE_ROOT . 'engine/');
define('IMG_DIR', 'img/'); // папка с картинками

//DB config
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'Root123!');
define('DB', 'gallery');


require_once(ENG_DIR . 'functions.php');
require_once(ENG_DIR . 'db.php');
?>
