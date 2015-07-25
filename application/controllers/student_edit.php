<?php
	//Подключаем основное меню 
	include "views/remove.html";
	
	//Подключаемся к БД.
	$dbc = mysqli_connect('localhost', 'root', '', 'students')
    or die('Не удалось подключиться к БД.');

	//Формируем запрос на выгрузку всех записей из таблицы.	
	$query = "SELECT * FROM the_expendables";
	
	//Получаем результат.
	$result = mysqli_query($dbc, $query);?>
	
	<!--Шапка таблицы с результатами -->
	<div class="row">
		<div class="col-md-3"></div>
		<div align="center" class="col-md-6">
		<h3 align='center'><font color='red'>Выберите запись для редактирования </font></h3>
		<form method="post" action="student_update.php">
		<table  class='table table-bordered'>
		<tr>
		<td></td>
		<td><b>Имя</b></td>
		<td><b>Фамилия</b></td>
		<td><b>Пол</b></td>
		<td align="center"><b>Год рождения</b></td>
		<td><b>Факультет</b></td>
		<td align="center"><b>Оценка за ЗНО</b></td>
		</tr>
	
  <?php
   // Выводим результаты запроса и достраиваем таблицу с результатами.
	while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . '<input type="radio" ." value="' . $row['id'] . '" name="id[]" />' . "</td>";
    echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['surname'] . "</td>";
	echo "<td>" . $row['sex'] . "</td>";
	echo "<td>" . $row['birth_year'] . "</td>";
	echo "<td>" . $row['department'] . "</td>";
	echo "<td>" . $row['eie'] . "</td>";
	echo "</tr>";		
	} 
	echo "</table>"; 
         
	//Отключаемся от БД.
	mysqli_close($dbc);
	
	
?>
	</table>
		<!--Кнопка редактировать  -->
		<input type="submit" class="btn btn-danger " name="edit" value="Редактировать " />
		</form>
		</div >
		<div class="col-md-3"></div>
	</div >
 
 
</body>
</html>
