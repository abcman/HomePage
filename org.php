 <?php
 include ('db.php');
$category= mysql_query("select * from category;");
//это для категорий
 
 echo '<p>
 <center>
 <form method="post" action="?action=org"> 
 <table style="height: 100px;" width="500">
<tbody>
<tr>
<td>Введите имя: <input size="30" name="name" type="text"></td>
<td>Введите телефон: <input size="10" name="phone" type="text"></td>
</tr>
<tr>
<td>Введите адрес: <input size="30" name="adress" type="text"</td>
<td>Выберите категорию: <select>'
 while($org = mysql_fetch_array($category))
      {
echo '<option value="Sony"></option>';
	  };
'</select> 
</td>
<td>Пользователь: ЭТО ВЫ</td>
</tr>
<tr><td align=center padding="20" colspan="2"><input value="Добавить запись" type="submit"></td></tr>
</tbody>
</table>
  </form></center></p>';
 
 $name = $_POST['name']; 
 $phone = $_POST['phone']; 
 $adress = $_POST['adress'];
 $cat = $_POST['category'];
 if (($name) and ($phone) and ($adress) and ($cat)) {
 $sql = 'INSERT INTO org(name, category, phone, adress) 
 VALUES("'.$name.'", "'.$cat.'","'.$phone.'", "'.$adress.'")';
 echo $sql;
 //echo $name;
// проверка
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
 }
 else { echo 'Данные не могут быть пустыми';}
 
   $spisok = mysql_query("select * from org;");
    if($spisok)
    {
      // Определяем таблицу и заголовок
      echo "<table width=700 border=1>";
      echo "<tr><td>Имя</td><td>Телефон</td><td><Категория</td><td>Адрес</td></tr>";
      // Так как запрос возвращает несколько строк, применяем цикл
      while($org = mysql_fetch_array($spisok))
      {
        echo "<tr><td>".$org['name']."&nbsp;</td>
        &nbsp </td><td>".$org['phone']."&nbsp;</td>
		<td>".$org['category']."</td>
        <td>".$org['adress']."&nbsp;</td></tr>";
      }
      echo "</table>";
    }
    else
    {
      echo "<p><b>Error: ".mysql_error()."</b><p>";
      exit();
    }

 ?>

