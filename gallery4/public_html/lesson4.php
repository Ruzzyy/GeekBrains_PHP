<?php 


require_once '../config/config.php';

$variables = [
	'title' => 'PHP 4 урок',
	'h1' => 'Галерея фотографий',
	'content' => scandir('img')
];

echo render(TPL_DIR . 'gallery.tpl', $variables); 


// foreach ($variables['content'] as $key => $img){
// 	if(($key === 0) || ($key === 1)) {
// 		continue;
// 	}

// 	echo "<img class='image' src=\"" . IMG_DIR . $img . "\" / width='300'>";
// };


