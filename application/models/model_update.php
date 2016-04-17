<?php
	/**
	* Подключаем базовый класс модели.
	*/
	require_once "model.php";
	
	
	/**
	* Класс модели страницы с обновлением.
	*/
	class Model_Update extends Model{
	
	
	function get_update(){
		
		/**
		* Инициализируем переменные с полученными значениями для отправки на сервер.
		*/
		$id = $_POST['id'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$sex = $_POST['sex'];	
		$birth_year = $_POST['birth_year'];
		$department = $_POST['department'];
		$eie = $_POST['eie'];	
		
		
		/**
		* Соединяемся с базой данных, используя адрес, имя пользователя, пароль и название базы данных. 
		* В случае неудачи получаем предупреждающее сообщение.
		*/
		$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Ошибка подключения к серверу.');
		
			
		/**
		* Формируем запрос к БД на обновление данных.
		*/
		$query = "UPDATE the_expendables SET name = '$name', surname = '$surname', sex = '$sex',  birth_year = '$birth_year', department = '$department', eie = '$eie'   WHERE id = '$id' " ;
	
		
		/**
		* Отправляем запрос.
		*/
		mysqli_query($dbc, $query)
		or die('Ошибка запроса к БД.');
		
		
		/**
		* Формируем новый запрос на получение записей таблицы после внесенных результатов.
		*/
		$query = "SELECT * FROM `the_expendables` ";
    
		
		/**
		* Отправляем запрос.
		*/
		mysqli_query($dbc, $query)
		or die ('Data not reseived.');
	
		
		/**
		* Получаем результат
		*/
		$result = mysqli_query($dbc, $query);
	
		
		/**
		* Выводим результат построчно с помощью функции mysqli_fetch_array()
		*/
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
		echo "</table>"	;
		
		/**
		* Отключаемся от базы 
		*/
		mysqli_close($dbc);
		
		}
		
}
	
	
?>	
