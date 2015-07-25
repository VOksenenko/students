<?php
	include "views/getall.html";// Подгружается каркас страницы отображения списка студентов.
?>
<div class="row">
		<div class="col-md-3"></div>
		<div align="center" class="col-md-6">
			<h3 align="center">Список студентов нашей актерской школы</h3>
			
<?php
	/*Соединяемся с базой данных. База данных находится на локальном сервере. Веб сервер, PHP и MySQL  установлены из пакета Денвер (http://www.denwer.ru/) В MySQL  есть база students и таблица со студентами the_expendables  */		
	$dbc = mysqli_connect('localhost', 'root', '', 'students')// Адрес сервера localhost, пользователь root, пароля нет, база students.
    or die('Не удалось соединиться');//Если не удастся соединиться будет выведено предупреждающее сообщение .
	
	/*Запрос на выбор всех полей и записей из БД.  */		
	$query = "SELECT * FROM `the_expendables` ";
    
	/*Отправляем запрос. */
    mysqli_query($dbc, $query)
      or die ('Не удалось получить данные.');// В случае неудачи получаем предупреждающее сообщение.
	  
	/*В случае успеха получаем результат запроса*/
	$result = mysqli_query($dbc, $query);	
	
	/*Строим таблицу, чтобы вывести результаты запроса */
	echo "<table  class='table table-bordered'>";
	echo "<tr>";
	echo "<td><b>" .  "Имя" . "</b></td>";
	echo "<td><b>" .  "Фамилия" . "</b></td>";
	echo "<td><b>" .  "Пол" . "</b></td>";
	echo "<td><b>" .  "Год рождения" . "</b></td>";
	echo "<td><b>" .  "Факультет" . "</b></td>";
	echo "<td><b>" .  "Оценка за ЗНО" . "</b></td>";
	echo "</tr>";
	
	/* С помощью функции mysqli_fetch_array построчно выводим все записи по нашему запросу и заполняем таблицу  */
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
	echo "</table>"; 
         
	/* Отключаемся от базы  */
	mysqli_close($dbc);

?>		
		<!-- Кнопка со ссылкой на странуцу редактирования данныех о студентах-->
		<form method = "post" action = "/application/controllers/student_edit.php">
		<input type="submit" class="btn btn-danger " name="edit" value="Редактировать " />
		</form>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>

