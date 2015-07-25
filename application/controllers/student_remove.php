	<?php
	
	include "views/remove.html";
	
	$dbc = mysqli_connect('localhost', 'root', '', 'students')
    or die('Не удалось подключиться к БД.');

  // 
	if (isset($_POST['remove'])) {
		if(isset($_POST['todelete'])){
			foreach ($_POST['todelete'] as $delete_id) {
			$query = "DELETE FROM the_expendables WHERE id = $delete_id";
			mysqli_query($dbc, $query)
			or die('Ошибка запроса к БД.');
		} 
    echo "<h3 align='center'><font color='red'>Отмеченные записи удалены.</font></h3>";
    } 
	}
	$query = "SELECT * FROM the_expendables";
	$result = mysqli_query($dbc, $query);
	
	
	include "/views/table.php";
	
  
   
	while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
    echo "<td>" . '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />' . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['surname'] . "</td>";
	echo "<td>" . $row['sex'] . "</td>";
	echo "<td>" . $row['birth_year'] . "</td>";
	echo "<td>" . $row['department'] . "</td>";
	echo "<td>" . $row['eie'] . "</td>";
	echo "</tr>";
	}

	mysqli_close($dbc);
	
	include"/views/btn_remove.html" ;
?>

  </form>
</body>
</html>
