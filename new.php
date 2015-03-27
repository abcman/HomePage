<center><form method="post" action="new.php"> 
// Здесь указываем метод передачи post и сам обработчик файл action.php
  Введите имя <br><input size="30" name="name" type="text">
  Введите пароль: <br><input size="45" name="passw" type="text">
  Введите дату: <br><input size="45" name="date" type="text">
  <br><input value="Добавить запись" type="submit">
  </form></center>

 <?php
 include ('db.php');
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

