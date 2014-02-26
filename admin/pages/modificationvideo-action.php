<?php 

$video = [
	'name' => '',
	'url' => '',
	'date' => '',
];

if (isset($_GET['id'])) {
	$result = $mysqli->query('SELECT * FROM videos WHERE id = ' . $_GET['id']);
	$video = $result->fetch_assoc();
	
// 	$videos = $result->fetch_all(MYSQLI_ASSOC);
// 	$video = $videos[0];

	$result = mysqli_query($mysqli2, 'SELECT * FROM videos WHERE id = ' . $_GET['id']);
	$video2 = mysqli_fetch_assoc($result);
}

if (count($_POST) > 0) {
	$formData = $_POST;
	
	if ($formData['action'] === 'insert') {
		$mysqli->query('INSERT INTO videos (name, url, date) VALUES("' . $formData['name-video'] . '", "' . $formData['url-video'] . '", "' . $formData['date-new-video'] . '")');
		
	} elseif ($formData['action'] === 'update' AND isset($video['id'])) {
		$mysqli->query('UPDATE videos SET name = "' . $formData['name-video'] . '", url = "' . $formData['url-video'] . '", date = "'. $formData['date-new-video'] .'" WHERE id = ' . $video['id']);
		
	} elseif ($formData['action'] === 'delete' AND isset($video['id'])) {
		$mysqli->query('DELETE FROM videos WHERE id = ' . $video['id']);
	}
	header('Location: ?page=listvideos');
	die;	
}