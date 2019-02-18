<?php 


function getImages() {
	return getAssocResult("SELECT * FROM images ORDER BY views DESC");
}

function getImage($id){
	$images = getAssocResult("SELECT * FROM images WHERE id = $id");
	if(empty($images)){
		return null;
	}
	return $images[0];
}

 
function increaseImageViews($id) {
	$sql = "UPDATE images SET views = views + 1 WHERE id = $id";
	$db = mysqli_connect(HOST, USER, PASS, DB);
	mysqli_query($db, "SET CHARACTER SET 'utf8'");
	mysqli_query($db, $sql);
	mysqli_close($db);
}

function getAssocResult($sql){
	$db = mysqli_connect(HOST, USER, PASS, DB);
	mysqli_query($db, "SET CHARACTER SET 'utf8'");
	$result = mysqli_query($db, $sql);
	$array_result = [];
	while ($row = mysqli_fetch_assoc($result)){
		$array_result[] = $row;
	}

	mysqli_close($db);
	return $array_result;
}






