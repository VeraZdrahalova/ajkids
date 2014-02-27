<?php 
$result = $mysqli->query('SELECT * FROM words ORDER BY namecz');	// f-ce query nad db vrací odpověď jako typ objekt, který nejde vypsat
																	// -> je nutné použít f-ci fetch_...
$words = $result->fetch_all(MYSQLI_ASSOC);		// f-ce fetch_all vrací na základě param. MYSQLI_ASSOC všechny vybrané řádky jako pole;
  												// zpracováním f-cí fetch_all se $result vyprázdní => znovu poslat dotaz  
?>  											      
          
          <table class="table table-striped table-bordered posuntop90">
              <thead>
                  <tr>
                      <th> </th>
                      <th> Slovíčko </th>
                      <th class="align-center"> Náhled obrázku </th>
                      <th> Zvuk </th>
                      <th> Přiřazená videa </th>
                      <th> Přiřazené písničky </th>
                      <th> Přiřazená témata </th>
                      <th> Vloženo </th>
                      <th> </th>
                  </tr>
              </thead>
              <tbody>
              	<?php foreach($words as $word) { ?>
                  <tr>
                      <td> <?php echo $word['namecz'] ?> </td>
                      <td> <?php echo $word['name'] ?> </td>
                      <td class="view2" style="padding: 0px 2px">
                      	<?php if ($word['image'] !== null) { ?>
                      		<img src="image/maly-<?= $word['image'] ?>" />
                      	<?php } ?>
                      </td>
                      <td>
                      	<?php if ($word['sound'] !== null) { ?>
                      		<?= $word['sound'] ?>
                      	<?php } else { ?>
                      		ne
                      	<?php } ?>
                      </td>
                      <td> video zvířata 1, video zvířata 2, video zvířata 3, video zvířata 4, video zvířata 5, video zvířata 5, </td>
                      <td> písníčka 1, písnička3  </td>
                      <td> téma 1, téma 2, téma 3, téma 4, téma 5, téma 1, téma 2, téma 3, téma 4, téma 5,  </td>
                      <td> <?php echo date('j.n.Y', strtotime($word['date'])) ?> </td>
                      <td><a href="?page=modificationword&id=<?php echo $word['id'] ?>">Upravit</a></td>
                  </tr>
                <?php } ?>
              </tbody>                
          </table>
          