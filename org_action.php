 <?php
 include ('db.php');
 $name = $_POST['name']; 
 $phone = $_POST['phone']; 
 $adress = $_POST['adress']; 
 $sql = 'INSERT INTO org(name, phone, adress) 
 VALUES("'.$name.'", "'.$phone.'", "'.$adress.'")';
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
?>
