<?php 

$theme = [
	'name' => '',
	'src' => '',
	'date' => '',
];

if (isset($_GET['id'])) {
	$result = $mysqli->query('SELECT * FROM themes WHERE id = ' . $_GET['id']);
	$theme = $result->fetch_assoc();
	
// 	$videos = $result->fetch_all(MYSQLI_ASSOC);
// 	$video = $videos[0];

	$result = mysqli_query($mysqli2, 'SELECT * FROM themes WHERE id = ' . $_GET['id']);
	$theme2 = mysqli_fetch_assoc($result);
}

if (count($_POST) > 0) {
	$formData = $_POST;
	
	if ($formData['action'] === 'insert') {
		$mysqli->query('INSERT INTO themes (name, date) VALUES("' . $formData['name-theme'] . '", "' . $formData['date-new-theme'] . '")');
		
	} elseif ($formData['action'] === 'update' AND isset($theme['id'])) {
		$mysqli->query('UPDATE themes SET name = "' . $formData['name-theme'] . '", date = "'. $formData['date-new-theme'] .'" WHERE id = ' . $theme['id']);
		
	} elseif ($formData['action'] === 'delete' AND isset($theme['id'])) {
		$mysqli->query('DELETE FROM themes WHERE id = ' . $theme['id']);
	}
	header('Location: ?page=listthemes');
	die;	
}