<?php
	/**
	* Подключаем базовый класс модели.
	*/
	require_once "model.php";
	
	/**
	* Класс модели страницы редактирования записи о студенте.
	*/
	class Model_Edit extends Model 
	{		
			
			function get_record(){
				
			/**
			* Проверяем, была ли выбрана запись.
			*/	
			if (isset($_POST['id'])) {
				
			/**
			* Соединяемся с БД.
			*/	
			$dbc = mysqli_connect('localhost', 'root', '', 'students')
			or die('Не удалось соединиться');
		
			
			/**
			* Формируем запрос на вывод записи с нужным id
			*/
			foreach ($_POST['id'] as $id) {
			$query = "SELECT * FROM the_expendables WHERE id = $id";
		
			
			/**
			* Отправляем запрос
			*/
			mysqli_query($dbc, $query)
			or die('Ошибка запроса к БД.');
			} 
		
			
			/**
			* Получаем результат запроса.
			*/
			$result = mysqli_query($dbc, $query);
	
			/**
			* Выводим результат запроса. Вообще-то это не совсем соответствует MVC - паттерну. Но не знаю пока, как отобразить эти данные в форме.
			*/ 
			while ($row = mysqli_fetch_array($result)) {
		
			echo '<tr>' ;
			echo '<input type="hidden" name = "id" value = '. $row['id'] .' >';
			echo '<td><b>Имя</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['name'] . '" name="name" /></td>';
			echo '</tr>';
			echo '<tr>' ;
			echo '<td><b>Фамилия</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['surname'] . '" name="surname" /></td>';
			echo '</tr>';
			echo '<tr>' ;
			echo '<td><b>Пол</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['sex'] . '" name="sex" /></td>';
			echo '</tr>';
			echo '<tr>' ;
			echo '<td><b>Год рождения</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['birth_year'] . '" name="birth_year" /></td>';
			echo '</tr>';	
			echo '<tr>' ;
			echo '<td><b>Факультет</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['department'] . '" name="department" /></td>';
			echo '</tr>';
			echo '<tr>' ;
			echo '<td><b>Оценка за ЗНО</b></td>';
			echo '<td><input type="chekbox"  value="' . $row['eie'] . '" name="eie" /></td>';
			echo '</tr>';
			echo '</table>';
			echo '<button type="submit" class="btn btn-danger" >Отправить</button>';
			} 
		
         
			/**
			* Отключаемся от базы 
			*/
			mysqli_close($dbc);
						
			} 
			
			/**
			* Если не была выбрана ни одна запись, выводим об этом сообщение и возвращаем к странице выбора. 
			*/
			else {
				echo '<h3 align="center"><font color="red">Не выбрана запись для редактирования!</font></h3>';	
				echo '<meta http-equiv="refresh" content="2;  url=http://mvc/select">';
			}
			
		} 
}
	
?>	
