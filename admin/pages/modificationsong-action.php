<?php 

$song = [
	'name' => '',
	'src' => '',
	'date' => '',
];

if (isset($_GET['id'])) {
	$result = $mysqli->query('SELECT * FROM songs WHERE id = ' . $_GET['id']);
	$song = $result->fetch_assoc();
	
//	$result = mysqli_query($mysqli2, 'SELECT * FROM songs WHERE id = ' . $_GET['id']);
//	$song2 = mysqli_fetch_assoc($result);
}

if (count($_POST) > 0) {
	$formData = $_POST;
	
	if ($formData['action'] === 'insert') {
		$mysqli->query('INSERT INTO songs (name, date) VALUES("' . $formData['name-song'] . '", "' . $formData['date-new-song'] . '")');
		
	} elseif ($formData['action'] === 'update' AND isset($song['id'])) {
		$mysqli->query('UPDATE songs SET name = "' . $formData['name-song'] . '", date = "'. $formData['date-new-song'] .'" WHERE id = ' . $song['id']);
		
	} elseif ($formData['action'] === 'delete' AND isset($song['id'])) {
		$mysqli->query('DELETE FROM songs WHERE id = ' . $song['id']);
	}
	header('Location: ?page=listsongs');
	die;	
}