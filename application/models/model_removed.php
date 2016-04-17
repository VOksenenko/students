<?php
	/**
	* Класс модели страницы удаления студентов.
	*/
	class Model_Removed extends Model 
	{
		function get_all(){
		
		/**
		* Соединяемся с базой данных
		*/
		$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Не удалось подключиться к БД.');
		
		/**
		* Проверяем, была ли нажата кнопка удаления, затем проверяем были ли выбраны записи для удаления.
		*/
		if (isset($_POST['toremove'])) {
		if(isset($_POST['todelete'])){
			
			/**
			* Если было отмечено, что удалять, формируем запрос на удаления, используя id записи из массива todelete[].
			* В случае неудачи, выводим сообщение об ошибке.
			*/
			foreach ($_POST['todelete'] as $delete_id) {
			$query = "DELETE FROM the_expendables WHERE id = $delete_id";
			mysqli_query($dbc, $query)
			or die('Ошибка запроса к БД.');
		} 
		/**
		* Если прошло успешно, выводим сообщение, что записи удалены.
		*/
		echo "<h3 align='center'><font color='red'>Отмеченные записи удалены.</font></h3>";
		echo '<meta http-equiv="refresh" content="0;  url=http://mvc/toremove">'; 
		} else {
			
			/**
			* Если нет - предупреждаем об ошибке и возвращаем к странице выбора.
			*/
			echo '<h3 align="center"><font color="red">Не выбрана запись для удаления!</font></h3>';
			echo '<meta http-equiv="refresh" content="0;  url=http://mvc/toremove">'; }   
		}
         
		/**
		* Отключаемся от БД
		*/
		mysqli_close($dbc);
		
		}
	}
		
?>	
