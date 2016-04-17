﻿<?php

	/**
	* Класс модели страницы отображения всех студентов.
	*/
	class Model_GetAll extends Model 
	{
		
	
	function get_all(){
		
		/**
		* Соединяемся с базой данных
		*/
		$dbc = mysqli_connect('localhost', 'root', '', 'students')// Адрес сервера localhost, пользователь root, пароля нет, база students.
		or die('Не удалось соединиться');//Если не удастся соединиться будет выведено предупреждающее сообщение .
	
		/**
		* Запрос на выбор всех полей и записей из БД.
		*/		
		$query = "SELECT * FROM `the_expendables` ";
    
		/**
		* Отправляем запрос. В случае неудачи получаем предупреждающее сообщение.
		*/
		mysqli_query($dbc, $query)
		or die ('Не удалось получить данные.');
		
		/**
		* В случае успеха получаем результат запроса
		*/
		$result = mysqli_query($dbc, $query);
		
		/**
		* Выводим построчно  результат запроса с помощью функции mysqli_fetch_array()
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
		echo "</table>"; 
         
		/**
		* Отключаемся от БД.
		*/
		
		mysqli_close($dbc);
	}
	}
		
?>	