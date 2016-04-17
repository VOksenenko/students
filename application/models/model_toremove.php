<?php
	/**
	* Класс модели страницы выбора студентов для удаления из БД.
	*/
	class Model_Toremove extends Model 
	{
		
		function get_all(){
		/**
		* Соединяемся с базой данных. 
		* Отправляем в качестве параметров адрес БД, имя пользователя, пароль, название базы данных. 
		* В случае неудачи получаем сообщение о том, что не удалось соединиться. 
		*/		
		$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Не удалось соединиться');
	
		/**
		* Запрос на выбор всех полей и записей из БД. 
		*/		
		$query = "SELECT * FROM `the_expendables` ";
    
		/**
		* Отправляем запрос.В случае неудачи получаем предупреждающее сообщение.
		*/
		mysqli_query($dbc, $query)
		or die ('Не удалось получить данные.');
		
		/**
		* В случае успеха получаем результат запроса
		*/
		$result = mysqli_query($dbc, $query);
		
		/**
		* Выводим построчно результат запроса с помощью функции mysqli_fetch_array()
		*/
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
		echo "</table>"; 
         
		/** 
		* Отключаемся от базы 
		*/
		mysqli_close($dbc);
		}
	}
		
?>	
