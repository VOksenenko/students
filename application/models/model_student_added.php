<?php
	/**
	* Подключаем базовый класс модели.
	*/
	require_once "model.php";
	
	
	/**
	* Класс модели страницы добавления нового студента.
	*/
	class Model_Student_Added extends Model{
		
		function add_student(){
		
		
		/**
		* Присваиваем соответствующим переменным данные из формы добавления нового студента.
		*/
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		
		if (isset($_POST['radio']))
		{
			if ($_POST['radio']==="м") $sex = "м";
			if ($_POST['radio']==="ж") $sex = "ж";
		} 
	
    	$birth_year = $_POST['birth_year'];
		$department = $_POST['department'];
		$eie = $_POST['eie'];
			
		
		/**
		* Если все поля заполнены, отправляем данные в БД.
		*/
		if (!empty($name) && !empty($surname) &&  !empty($birth_year) && !empty($department) && !empty($eie)) {
		
		
		/**
		* Соединяемся с БД.
		*/
		$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Ошибка подключения к серверу.');

		
		/**
		* Формируем запрос на добавление новой записи.
		*/
		$query = "INSERT INTO `the_expendables` (`name`, `surname`, `sex`, `birth_year`, `department`, `eie`) VALUES
		('$name', '$surname', '$sex', $birth_year, '$department', $eie);";
		
		
		/**
		* Отправляем запрос.
		*/
		mysqli_query($dbc, $query)
		or die ("<h3 align='center'><font color='red'>Данные не отправлены. Убедитесь, что все поля заполнены корректно и повторите попытку.</font></h3>");

		
		/**
		* Отключаемся от БД.
		*/
		mysqli_close($dbc);
		
		
		/**
		* В случае успеха выводим сообщение, что данные отправлены. Если нет, возвращаемся на предыдущую страницу.
		*/
		echo "<h3 align='center'><font color='green'>Данные отправлены</font></h3>";
		
		} 
		else echo '<h3 align="center"><font color="red">Данные не отправлены</font></h3>';
			echo "<meta http-equiv='Refresh' content='1; URL=".$_SERVER['HTTP_REFERER']."'>";
	}
	
}
	
	
	
?>	
