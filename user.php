 <?php
 include ('db.php');
 
  $spisok = mysql_query("select * from users;");
    if($spisok)
    {
      // Определяем таблицу и заголовок
      echo "<table width=1000 border=0>";
      echo "<tr><td>ID</td><td>Имя</td><td>Пароль</td><td>Дата</td></tr>";
      // Так как запрос возвращает несколько строк, применяем цикл
      while($user = mysql_fetch_array($spisok))
      {
        echo "<tr><td>".$user['id']."&nbsp;</td><td>".$user['name']."
        &nbsp </td><td>".$user['passw']."&nbsp;</td><td>".  
        $user['date']."&nbsp;</td></tr>";
      }
      echo "</table>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b><p>";
      exit();
    }
 
 echo '<center><form method="post" action="new.php"> 
  Введите имя <br><input size="30" name="name" type="text">
  Введите пароль: <br><input size="45" name="passw" type="text">
  Введите дату: <br><input size="45" name="date" type="text">
  <br><input value="Добавить запись" type="submit">
  </form></center>';
 
 $name = $_POST['name']; // передаем переменной email значение глобального массива POST
 $passw = $_POST['passw']; // повторять не буду: тут происходит то, что в первом случае
 if ($passw != 0) {
 $sql = 'INSERT INTO users(name, passw) 
 VALUES("'.$name.'", "'.$passw.'")';
 echo $name;
// проверка
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
 }
 else { echo 'Данные не могут быть пустыми';}

 ?>

