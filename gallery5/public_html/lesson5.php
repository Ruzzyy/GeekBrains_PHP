<?php 


require_once('../config/config.php');

echo render(TPL_DIR . 'gallery.tpl', [
	'title'	  => 'Учебная галерея картинок',
	'h1'      => 'Галерея картинок',
	'gallery' => makeGallery(WWW_ROOT . IMG_DIR)
]);

?>