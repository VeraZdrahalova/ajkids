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

if (count($_POST) > 0) {			/* f-ce count vrátí součet public vlastností nad objektem typu pole; pokud byl vytvořen z pole -> jsou všechny vlast. public; 
										nevypisují se private a protected vlast.; 		
											příkl.:	class Example {
														public $public = 'prop:public';
														private $prv   = 'prop:private';
														protected $prt = 'prop:protected';
													}
													
													$arrayobj = new ArrayObject(new Example());
													var_dump($arrayobj->count());		output: int(1)
													
													$arrayobj = new ArrayObject(array('first','second','third'));
													var_dump($arrayobj->count());		output: int(3)																																							
									*/
	$formData = $_POST;				
	
/*	var_dump($_POST);
/*		tlačítkem Odeslat:
			array (size=8)
				'name-word' => string 'hhhhhhhh' (length=8)
				'name-word-cz' => string 'hhhcz' (length=5)
				'date-new-word' => string '2014-01-31' (length=10)
				'action' => string 'insert' (length=6)
				'vyber-video1' => string 'on' (length=2)
				'vyber-tema2' => string 'on' (length=2)
				'vyber-tema3' => string 'on' (length=2)
				'vyber-tema4' => string 'on' (length=2)
		tlačítkem Smazat:
			array (size=4)
				'name-word' => string 'xxxxx' (length=5)
				'action' => string 'delete' (length=6)
				'name-word-cz' => string 'yy' (length=2)
				'date-new-word' => string '2014-09-01' (length=10)
		+ přes $_GET (v adrese stránky) je posláno:
			http://ajkids.lamp/admin.php?page=modificationword&id=6
*/	

/*	var_dump($_FILES);
		array (size=2)										výpis vložených souborů přes formulář
			'new-sound' =>											1.soub. je prázdný
				array (size=5)
					'name' => string '' (length=0)
					'type' => string '' (length=0)
					'tmp_name' => string '' (length=0)
					'error' => int 4
					'size' => int 0
			'new-image' =>											2.soub. je obrázek
				array (size=5)
					'name' => string 'doprava.jpg' (length=11)
					'type' => string 'image/jpeg' (length=10)
					'tmp_name' => string '/tmp/php70Y9rY' (length=14)
					'error' => int 0
					'size' => int 94283		
*/	

	if ($formData['action'] === 'insert') {
		$mysqli->query('INSERT INTO words (namecz, name, date) VALUES("' . $formData['name-word-cz'] . '", "' . $formData['name-word'] . '", "' . $formData['date-new-word'] . '")');
		
	} elseif ($formData['action'] === 'update' AND isset($word['id'])) {
		if (strlen($_FILES['new-image']['tmp_name']) > 0) {					// f-ce strlen vrací délku řetězce jako typ int
			$image = new Image();
			$params = [
				0 => [														// echo __FILE__ :	 /var/www/ajkids.lamp/web/admin/pages/modificationword-action.php (= adresa aktuálního soub.)
					'dir' => dirname(dirname(__DIR__)) . '/image/',			// echo __DIR__ :    /var/www/ajkids.lamp/web/admin/pages (= adresa aktuálního soub. bez jeho názvu)
					'size' => [												// f-ce dirname([$var]/'char')		zkrátí zprava - uvedenou adresu o jeden adresář nebo jm.soub.  
						'width' => 800,										//					nebo ponechá jen / nebo . jako hodnotu nadřazeného adresáře,
						'height' => 600										//					__DIR__ = dirname(__FILE__),
						],													// 					vnořováním této f-ce se pohybujeme v našich soub., ať jsou přesunuty kamkoliv
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
// bool copy ( string $source , string $dest [, resource $context ] )	 - f-ce kopíruje soubor(odkud, kam/jmeno_souboru.xxx, ?)	
// bool move_uploaded_file ( string $filename , string $destination )	 - f-ce přesune soubor(odkud, kam/jmeno_souboru.xxx )
 
			$mysqli->query('UPDATE words SET sound = "' . $_FILES['new-sound']['name'] . '" WHERE id = ' . $word['id']);
		}
		
		$mysqli->query('UPDATE words SET namecz="' . $formData['name-word-cz'] . '", name = "' . $formData['name-word'] . '", date = "'. $formData['date-new-word'] .'" WHERE id = ' . $word['id']);
		
	} elseif ($formData['action'] === 'delete' AND isset($word['id'])) {
		$mysqli->query('DELETE FROM words WHERE id = ' . $word['id']);
	}
	header('Location: ?page=listwords');			// přesun na jinou stránku, smí se uskutečnit jen před posláním čehokoliv klientovi
	die;											//  => před příkazem nesmí být žádný html kód, echo nebo print
}