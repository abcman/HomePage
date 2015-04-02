<?php
 include ('db.php');
 
   $spisok = mysql_query("select * from category;");
    if($spisok)
    {
      // Определяем таблицу и заголовок
      echo "<table width=1000 border=0>";
      echo "<tr><td>ID</td><td>Название</td><td>Количество организаций</td></tr>";
      // Так как запрос возвращает несколько строк, применяем цикл
      while($user = mysql_fetch_array($spisok))
      {
        echo "<tr><td>".$category['id']."&nbsp;</td><td>".$user['name']."
        &nbsp </td><td>".$category['name']."&nbsp;</td></tr>";
		//echo mysql_query("SELECT COUNT(`id`) FROM `users` ");
		//ЗДЕСЬ ВБИТЬ ПОДРОБНЕЕ
      }
      echo "</table>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b><p>";
      exit();
    }

?>
