<?php
	// Подгружаем шапку с меню.
	include "views/remove.html";
	
	//Инициализируем переменные
	$id = $_POST['id'];
	$name = $_POST['name'];
    $surname = $_POST['surname'];
	$sex = $_POST['sex'];	
	$birth_year = $_POST['birth_year'];
	$department = $_POST['department'];
	$eie = $_POST['eie'];
	
	//Соединяемся с базой данных
	$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Ошибка подключения к серверу.');
	//Формируем запрос к БД на обновление данных.	
	$query = "UPDATE the_expendables SET name = '$name', surname = '$surname', sex = '$sex',  birth_year = '$birth_year', department = '$department', eie = '$eie'   WHERE id = '$id' " ;
	
	//Отправляем запрос.
	mysqli_query($dbc, $query)
		or die('Ошибка запроса к БД.');
	
	?>
	<!-- Шапка таблицы с результатами -->
	<div class="row">
		<div class="col-md-3"></div>
		<div align="center" class="col-md-6">
		<h3>Обновленный список студентов<h3>
		<table  class='table table-bordered'>
		<tr>
		<td><b>Имя</b></td>
		<td><b>Фамилия</b></td>
		<td><b>Пол</b></td>
		<td><b>Год рождения</b></td>
		<td><b>Факультет</b></td>
		<td><b>Оценка за ЗНО</b></td>
		</tr>
		

<?php
	//Формируем запрос на получение записей таблицы после внесенных результатов.
	$query = "SELECT * FROM `the_expendables` ";
    
	//Отправляем запрос.
    mysqli_query($dbc, $query)
      or die ('Data not reseived.');
	
	//Получаем результат
	$result = mysqli_query($dbc, $query);
	
	//Выводим результат построчно с помощью функции mysqli_fetch_array()
	while ($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['surname'] . "</td>";
	echo "<td>" . $row['sex'] . "</td>";
	echo "<td>" . $row['birth_year'] . "</td>";
	echo "<td>" . $row['department'] . "</td>";
	echo "<td>" . $row['eie'] . "</td>";
	echo "</tr>";		
	} 
	
	//Отключаемся от БД.
	mysqli_close($dbc);	
	
?>
		</table>
		<!--Кнопка редактировать-->
		<form method = "post" action = "/application/controllers/student_edit.php">
		<input type="submit" class="btn btn-danger " name="edit" value="Редактировать " />
		</form>
		</div >
		<div class="col-md-1"></div>
	</div >
	
</body>
</html> 