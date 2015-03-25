    <?php
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
    ?>