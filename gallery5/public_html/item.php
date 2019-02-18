<?php 

require_once ('../config/config.php');

function show404(){
	echo "Изображение не найдено";
	exit();
}

if(empty($_GET['id'])) {
	show404();
}

$image = getImage($_GET['id']);

if(empty($image)){
	show404();
}

increaseImageViews($image['id']);

echo render(TPL_DIR . 'item.tpl', [
	'title' => $image['title'],
	'src'   => $image['url'],
	'views' => $image['views'] + 1
]);


?>