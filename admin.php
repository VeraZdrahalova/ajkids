<?php

require_once 'core/db.php';

$pages = [
	'listthemes' => [
		'name' => 'Téma',
		'id' => 'listthemes',
	],
	'listvideos' => [
		'name' => 'Videa',
		'id' => 'listvideos',
	],
	'listsongs' => [
		'name' => 'Písničky',
		'id' => 'listsongs',
	],
	'listwords' => [
		'name' => 'Slovíčka',
		'id' => 'listwords',
	],
	'modificationtheme' => [
		'name' => 'Úprava téma',
		'id' => 'modificationtheme',
	],
	'modificationvideo' => [
		'name' => 'Úprava videa',
		'id' => 'modificationvideo',
	],
	'modificationsong' => [
		'name' => 'Úprava písničky',
		'id' => 'modificationsong',
	],
	'modificationword' => [
		'name' => 'Úprava slovíčka',
		'id' => 'modificationword',
	],
];

$selectedPage = null;

if (isset($_GET['page'])) {

	$selectedPage = $pages[$_GET['page']];
}
//echo " tohle je var_dump(selectedPage) "; VAR_DUMP($selectedPage);
//die;
if ($selectedPage !== null AND file_exists('admin/pages/' . $selectedPage['id'] . '-action.php')) {
	require 'admin/pages/' . $selectedPage['id'] . '-action.php';
}


?>
<!DOCTYPE html>

<html>

  <head>
    <meta name="description" content="Angličtina pro děti">  
    <meta charset="UTF-8">
    <title>Angličtina pro děti</title>
    
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/ajkids.css" rel="stylesheet">    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body  class="list">

      <div class="container font-margin-label"> 
      
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">   
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header posunleft" id="hover1">       
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>           
                </button>
                <a class="navbar-brand <?php if ($selectedPage !== null AND 'listthemes' === $selectedPage['id']) {echo 'active';} ?>" href="?page=listthemes">Téma</a>         
              </div>
            
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="hover2">
                	<?php  foreach ($pages as $page) { ?>
                		<?php if ($page['id'] !== 'listthemes') { ?>
	                  		<li <?php if ($selectedPage !== null AND $page['id'] === $selectedPage['id']) { echo 'class="active"'; } ?>>
	                  			<a href="?page=<?php echo $page['id'] ?>"><?php echo $page['name'] ?></a>
	                  		</li>
	                  	<?php } ?>
                  	<?php } ?>
                </ul>
                <span  class="posunleft15" id="hovericon">             
                    <a href="ajkids.html" class="btn btn-default" id="icon" target="_blank" role="button"><span class="glyphicon glyphicon-home"></span></a>
                </span>                   
              </div><!-- /.navbar-collapse -->
          </nav>

          <div class="posuntop90">
          	<?php var_dump($selectedPage); ?><br/>
          	
          	<?php if ($selectedPage !== null) { require 'admin/pages/' . $selectedPage['id'] . '-view.php'; } ?>
          </div>

      </div><!-- end of container -->            
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>

  </body>
  
</html>
