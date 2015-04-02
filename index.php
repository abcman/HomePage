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
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
    <?php include 'functions.php';
	get_header(); ?>
  </head>
  <body>

      
    <div class="container">
        <img src="images/bootsimple.jpg" style="width:100%" class="img-responsive" alt="Responsive image">  
      <!-- Static navbar -->
     <nav align=center class="navbar navbar-inverse">
		 <a class="navbar-brand" href="/">Аксайт - каталог организаций</a>
		 <a class="navbar-brand" href="?action=org">Организации</a>
		 <a class="navbar-brand" href="?action=cat">Категории</a>
		 <a class="navbar-brand" href="?action=add_user">Пользователи</a>
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
