<?php
/*$spojeni = new mysqli ('localhost', 'root', 'lamp', 'ajkids');
$spojeni -> query('set charset utf8');		//nastaví znakovou sadu pro komunikaci mysql s php, nepřebírá žádné nastavení z mnou vytvořené db nebo z tabulek

$dotaz = 'select * from videos';

$vysledek = $spojeni->query($dotaz);
*/
$a=10;
$b='abc';
var_dump($vysledek , $a , $b);

//$fetch1vysledek = $vysledek->fetch_all();			//zpracováním f-cí fetch_all se $vysledek vyprázdní => znovu poslat dotaz
//echo 'výpis fetch1vysledek : '; var_dump($fetch1vysledek);		// param. MYSQL_ASSOC,... musí být velkými písmeny


//$vysledek = $spojeni->query($dotaz);
//$fetch2vysledek = $vysledek->fetch_all(MYSQL_ASSOC);
//echo 'výpis fetch2vysledek : '; var_dump($fetch2vysledek);
/*
while ($row = $vysledek->fetch_assoc()) {
	echo 'row : '; var_dump($row);
}
*/

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
echo strtotime("1 July 2014"), "\n";
echo date('d.m.Y', strtotime('01-10-2013')) . "<br />";
echo date('d.m.Y') . "<br /><br />";

echo strlen("Hello") . "<br />";


echo __DIR__ . "<br />";
echo dirname(__DIR__) . "<br />";
echo dirname(dirname(__DIR__)) . "<br />";
echo __FILE__ . "<br />";
echo dirname(__FILE__) . "<br />";
echo dirname('/web/pokusy.php') . "<br />";
echo dirname('/pokusy.php') . "<br />";
echo dirname(pokusy.php) . "<br /><br />";
echo "1) " . dirname("/etc/passwd") . "<br />"; // 1) /etc
echo "2) " . dirname("/etc/") . "<br />"; // 2) / (or \ on Windows)
echo "3) " . dirname(".") . "<br /><br /><br />"; // 3) .

?>

<!DOCTYPE html>

<html>

  <head>
      <meta name="description" content="pokusy">  
      <meta charset="UTF-8">
  </head>
  
  <body> 
    <form method="GET">   
      <button type="submit" name="action" value="delete" class="btn btn-danger delete-button "  >Smazat video</button>
    </form>
      <br/><br/>
    <form method="POST" enctype="multipart/form-data">
      <p><input type='file' name='test-image' src="#"/> &nbsp;&nbsp;&nbsp;
      	 <button type="submit">odeslat</button>	
      </p>
      </form>
      <?php
      	if (strlen($_FILES['test-image']['tmp_name']) > 0) {
      		var_dump($_FILES);
      		$src = 'image/' . $_FILES["test-image"]["name"];
      		var_dump($_FILES['test-image']['tmp_name']);
      		var_dump($src);
//     		var_dump(copy($_FILES['test-image']['tmp_name'], $src));
//    		var_dump(move_uploaded_file($_FILES['test-image']['tmp_name'], $src));
			var_dump(getimagesize($src));
      		?>
      		Pokusný obrázek : &nbsp;&nbsp;&nbsp;<img src="<?php echo $src?>" alt="pokus s obrázkem" border="1" />
      		<br/><br/><br/>
      	<?php }?>
      	
      	<?php
// deklarace pole      	 
      	$fruits = array (
		    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
		    "numbers" => array(1, 2, 3, 4, 5, 6),
		    "holes"   => array("first", 5 => "second", "third")
		);
		var_dump($fruits);
/*			array (size=3)
			'fruits' =>
				array (size=3)
					'a' => string 'orange' (length=6)
					'b' => string 'banana' (length=6)
					'c' => string 'apple' (length=5)
			'numbers' =>
				array (size=6)
					0 => int 1
					1 => int 2
					2 => int 3
					3 => int 4
					4 => int 5
					5 => int 6
			'holes' =>
				array (size=3)
					0 => string 'first' (length=5)
					5 => string 'second' (length=6)
					6 => string 'third' (length=5)
*/

echo '<p>ahoj</p>'; 		


/*		$celkem = 0;
		
		for ($i = 0; $i <= 10; $i++) {
			
			//$celkem += $i;
			
			$celkem = $celkem + $i;
			
			//$text .= $string;		jde i řetězit
			
			echo "<p>$i a $celkem</p>";
		}
*/		
//		print_r(get_defined_constants());		
		
		?>
		
		
  </body>
</html>
