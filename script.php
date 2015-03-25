    <?php
    include "base_config.php";
    $ath = mysql_query("select * from users;");
    if($ath)
    {
      $author = mysql_fetch_array($ath);
      echo "<br>имя = ".$author['name']."<br>";
      echo "пароль = ".$author['passw']."<br>";
      echo "e-mail = ".$author['email']."<br>";
      echo "url = ".$author['url']."<br>";
      echo "ICQ = ".$author['icq']."<br>";
      echo "about = ".$author['about']."<br>";
      echo "photo = ".$author['photo']."<br>";
      echo "time = ".$author['time'];
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b></p>";
      exit();
    }
    ?>