<?php 
$result = $mysqli->query('SELECT * FROM themes ORDER BY name');
$themes = $result->fetch_all(MYSQLI_ASSOC);
?>          

<table class="table table-striped table-bordered posuntop90">
              <thead>
                  <tr>
                      <th> Téma </th>
                      <th class="align-center"> Náhled obrázku </th>
                      <th> Přiřazená videa </th>
                      <th> Přiřazené písničky </th>
                      <th> Přiřazená slovíčka </th>
                      <th> Vloženo </th>
                      <th> </th>
                  </tr>
              </thead>
              <tbody>
              	<?php foreach ($themes as $theme) {?>
                  <tr>
                      <td> <?php echo $theme[name]?> </td>
                      <td class="view1" style="padding: 0px"> </td>
                      <td> video zvířata 1, video zvířata 2, video zvířata 3, video zvířata 4, video zvířata 5, video zvířata 5, video zvířata 5, video zvířata 5, video zvířata 5, video zvířata 5, video zvířata 5, video zvířata 5 </td>
                      <td> písníčka 1, písnička3  </td>
                      <td> slovíčko 1, slovíčko 2, slovíčko 3, slovíčko 4, slovíčko 5, slovíčko 6, slovíčko 7, slovíčko 8, slovíčko 9, slovíčko 10, slovíčko 11, slovíčko 12, slovíčko 13, slovíčko 14, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15 </td>
                      <td> <?php echo date('j.n.Y', strtotime($theme['date']))?> </td>                      			
                      <td><a href="?page=modificationtheme&id=<?php echo $theme['id'] ?>">Upravit</a></td>
                  </tr>
              	<?php }?>
              </tbody>                 
</table>