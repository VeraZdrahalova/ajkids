<?php 
	$result = $mysqli->query('SELECT * FROM songs ORDER BY name');
	$songs = $result->fetch_all(MYSQLI_ASSOC);
?>
          
          <table class="table table-striped table-bordered posuntop90">
              <thead>
                  <tr>
                      <th> Písničky </th>
                      <th class="align-center"> Náhled obrázku </th>
                      <th> Přiřazená témata </th>
                      <th> Přiřazená slovíčka </th>
                      <th> Vloženo </th>
                      <th> </th>
                  </tr>
              </thead>
              <tbody>
              	<?php foreach ($songs as $song) {?>
                  <tr>
                      <td> <?php echo $song['name']?> </td>
                      <td class="view1" style="padding: 0px"> </td>
                      <td> téma 1, téma 2, téma 3, téma 4, téma 5, téma 1, téma 2, téma 3, téma 4, téma 5, téma 1, téma 2, téma 3, téma 4, téma 5,  </td>
                      <td> slovíčko 1, slovíčko 2, slovíčko 3, slovíčko 4, slovíčko 5, slovíčko 6, slovíčko 7, slovíčko 8, slovíčko 9, slovíčko 10, slovíčko 11, slovíčko 12, slovíčko 13, slovíčko 14, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15, slovíčko 15 </td>
                      <td> <?php echo date('j.n.Y', strtotime($song['date'])) ?> </td>
                      <td><a href="?page=modificationsong&id=<?php echo $song['id']?>">Upravit</a></td>
                  </tr>
                <?php }?>
              </tbody>                
          </table>