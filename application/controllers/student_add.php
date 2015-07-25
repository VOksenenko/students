<?php
	include "/views/add.html";
	$flag=true;
	/* if(isset($POST['submit'])){} Проверяется условие: была ли нажата кнопка "Отправить"  */
	/* $flag=false; Это флаг который показывает, была ли нажата кнопка "Отправить" */
	
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
	
	if (empty($name) || empty($surname) ||  empty($birth_year) || empty($department) || empty($eie)) {
		echo "<div><h3 align='center'><font color='red'>Заполните, пожалуйста все поля</font></h3></div>";
		}
	
	if (!empty($name) && !empty($surname) &&  !empty($birth_year) && !empty($department) && !empty($eie)) {/* Если все поля заполнены, данные отправляются в базу данных. */
		
		$dbc = mysqli_connect('localhost', 'root', '', 'students')
		or die('Ошибка подключения к серверу.');

		$query = "INSERT INTO `the_expendables` (`name`, `surname`, `sex`, `birth_year`, `department`, `eie`) VALUES
('$name', '$surname', '$sex', $birth_year, '$department', $eie);";
		mysqli_query($dbc, $query)
		or die ("<h3 align='center'><font color='red'>Данные не отправлены. Убедитесь, что все поля заполнены корректно и повторите попытку.</font></h3>");

		echo "<h3 align='center'><font color='green'>Данные отправлены</font></h3>";
		
		mysqli_close($dbc);
		$flag=false;
		
	}
	if($flag){include "views/form.php";}// if($flag){} Пока не нажата кнопка "Отправить",  форма  отображается  
	?>

</body>
</html>