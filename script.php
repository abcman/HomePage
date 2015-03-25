 <!--  <?php
    include "base_config.php";
    $ath = mysql_query("select * from users;");
    if($ath)
    {
      $author = mysql_fetch_array($ath);
	  echo "<br>Айдишник = ".$author['id']."<br>";
      echo "имя = ".$author['name']."<br>";
      echo "пароль = ".$author['passw']."<br>";
      echo "Дата = ".$author['date']."<br>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b></p>";
      exit();
    }
    ?> -->
	
	    <?php
    include "db.php";
    $ath = mysql_query("select * from users;");
    if($ath)
    {
      // Определяем таблицу и заголовок
      echo "<table width=1000 border=0>";
      echo "<tr><td>ID</td><td>Имя</td><td>Пароль</td><td>Дата</td></tr>";
      // Так как запрос возвращает несколько строк, применяем цикл
      while($author = mysql_fetch_array($ath))
      {
        echo "<tr><td>".$author['id']."&nbsp;</td><td>".$author['name']."
        &nbsp </td><td>".$author['passw']."&nbsp;</td><td>".  
        $author['date']."&nbsp;</td></tr>";
      }
      echo "</table>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b><p>";
      exit();
    }
    ?>