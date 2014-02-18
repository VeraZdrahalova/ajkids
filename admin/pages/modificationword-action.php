<?php 

$word = [
	'name' => '',
	'namecz' => '',
	'src' => '',
	'date' => '',
];

if (isset($_GET['id'])) {
	$result = $mysqli->query('SELECT * FROM words WHERE id = ' . $_GET['id']);
	$word = $result->fetch_assoc();
	
	$result = mysqli_query($mysqli2, 'SELECT * FROM words WHERE id = ' . $_GET['id']);
	$word2 = mysqli_fetch_assoc($result);
}

if (count($_POST) > 0) {
	$formData = $_POST;
	
	if ($formData['action'] === 'insert') {
		$mysqli->query('INSERT INTO words (namecz, name, date) VALUES("' . $formData['name-word-cz'] . '", "' . $formData['name-word'] . '", "' . $formData['date-new-word'] . '")');
		
	} elseif ($formData['action'] === 'update' AND isset($word['id'])) {
		if (strlen($_FILES['new-image']['tmp_name']) > 0) {
			$image = new Image();
			$params = [
				0 => [
					'dir' => dirname(dirname(__DIR__)) . '/image/',
					'size' => [
						'width' => 800,
						'height' => 600
					],
					'id' => $word['id']
				],
				1 => [
					'size' => [
						'width' => 100,
						'height' => 100
					],
					'prefix' => 'maly-'
				]
			];
			$obrazek = $image->create($_FILES['new-image']['tmp_name'], $params);
			
			$mysqli->query('UPDATE words SET image = "' . $obrazek[0]['name'] . '" WHERE id = ' . $word['id']);
		}
		
		if (strlen($_FILES['new-sound']['tmp_name'])> 0) {
			copy($_FILES['new-sound']['tmp_name'], dirname(dirname(__DIR__)) . '/sounds/' . $_FILES['new-sound']['name']);
			
			$mysqli->query('UPDATE words SET sound = "' . $_FILES['new-sound']['name'] . '" WHERE id = ' . $word['id']);
		}
		
		$mysqli->query('UPDATE words SET namecz="' . $formData['name-word-cz'] . '", name = "' . $formData['name-word'] . '", date = "'. $formData['date-new-word'] .'" WHERE id = ' . $word['id']);
		
	} elseif ($formData['action'] === 'delete' AND isset($word['id'])) {
		$mysqli->query('DELETE FROM words WHERE id = ' . $word['id']);
	}
	header('Location: ?page=listwords');
	die;	
}