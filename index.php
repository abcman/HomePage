<?php 
/****************************************************
*
* @File:         template.php
* @Package:      BootSimple
* @Action:       Simple Bootstrap theme
*
*****************************************************/
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
	<title>Аксайт - каталог организаций в Аксае</title>
	
    <?php include 'functions.php';
	get_header(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- Custom css -->
    <!--   link rel="stylesheet" href="your_cusom_css.css">      -->
	  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>

      
    <div class="container">
        <img src="http://homepage.local/homepage/images/bootsimple.jpg" style="width:100%" class="img-responsive" alt="Responsive image">  
      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Аксайт - каталог организаций</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <?php get_top_menu(); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main Contents -->
      <div class="col-md-8 col-xs-12">
		<h1><?php get_page_title(); ?></h1>                					     
		<?php get_page_content(); ?>
      </div>
      <!-- Space between blocks -->
	  <div class="col-xs-12 visible-xs">
		<br>
	  </div>
	  <div class="col-md-4 col-xs-12" style="min-height:485px">
       		<?php get_sidebar(); ?>
	  </div>
      
      
      
      
    </div> <!-- /container --> 
    
    
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <?php get_footer(); ?>
    
  </body>
</html>
