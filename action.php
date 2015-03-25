 <?php
 include ('db.php');
 $name = $_POST['name']; // передаем переменной email значение глобального массива POST
 $passw = $_POST['passw']; // повторять не буду: тут происходит то, что в первом случае
 $sql = 'INSERT INTO users(name, passw) 
 VALUES("'.$name.'", "'.$passw.'")';
 echo $name;
// проверка
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
?>
