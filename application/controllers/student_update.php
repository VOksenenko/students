<?php

	if(isset($_POST['id'])){
	include "/views/getall2.html";	
	$dbc = mysqli_connect('localhost', 'root', '', 'students')
	or die('Ошибка подключения к серверу.');
	
	foreach ($_POST['id'] as $id) {
	$query = "SELECT * FROM the_expendables WHERE id = $id";
		mysqli_query($dbc, $query)
		or die('Ошибка запроса к БД.');
		} 
		
	$result = mysqli_query($dbc, $query);
	
	while ($row = mysqli_fetch_array($result)) {
	include "/views/table_update.php";
	}
	mysqli_close($dbc);
	
	echo "</table>"	;
	echo '<input type="submit" class="btn btn-danger " name="edit" value="Отправить " />';
	echo '</form></div >';
	echo '<div class="col-md-1"></div>';
	echo '</div >';
	echo '</body></html>' ;
}
	else require "student_edit.php";
	?>
		