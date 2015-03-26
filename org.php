 <?php
 include ('db.php');
 
  $spisok = mysql_query("select * from org;");
    if($spisok)
    {
      // Определяем таблицу и заголовок
      echo "<table width=700 border=1>";
      echo "<tr><td>Имя</td><td>Телефон</td><td>Адрес</td></tr>";
      // Так как запрос возвращает несколько строк, применяем цикл
      while($org = mysql_fetch_array($spisok))
      {
        echo "<tr><td>".$org['name']."&nbsp;</td>
        &nbsp </td><td>".$org['phone']."&nbsp;</td>
        <td>".$org['adress']."&nbsp;</td></tr>";
      }
      echo "</table>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b><p>";
      exit();
    }
 
 echo '<p>
 <center>
 <form method="post" action="org.php"> 
  <br>Введите имя: <input size="30" name="name" type="text">
  <br>Введите телефон: <input size="30" name="phone" type="text">
  <br>Введите адрес: <input size="30" name="adress" type="text">
  <br><input value="Добавить запись" type="submit">
  </form></center></p>';
 
 $name = $_POST['name']; 
 $phone = $_POST['phone']; 
 $adress = $_POST['adress']; 
 if (($name != 0) and ($phone != 0) and ($adress != 0)) {
 $sql = 'INSERT INTO org(name, phone, adress) 
 VALUES("'.$name.'", "'.$phone.'", "'.$adress.'")';
 //echo $name;
// проверка
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
 }
 else { echo 'Данные не могут быть пустыми';}

 ?>

