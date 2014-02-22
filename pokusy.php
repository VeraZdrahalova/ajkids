<?php
/*$spojeni = new mysqli ('localhost', 'root', 'lamp', 'ajkids');
$spojeni -> query('set charset utf8');		//nastaví znakovou sadu pro komunikaci mysql s php, nepřebírá žádné nastavení z mnou vytvořené db nebo z tabulek

$dotaz = 'select * from videos';

$vysledek = $spojeni->query($dotaz);
*/
$a=10;
$b='abc';
var_dump($vysledek , $a , $b);

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
echo strtotime("1 July 2014"), "\n";
echo date('d.m.Y', strtotime('01-10-2013')) . "<br />";
echo date('d.m.Y');

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
      <label for="topicalimage" >Vybraný obrázek : </label>
                <input type="text" src="#" name="topical-image" class="form-control image-theme" id="topicalimage"  />                
	</form>  
  </body>
</html>
