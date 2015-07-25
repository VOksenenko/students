<div class="row">
		<div class="col-md-3"></div>
		<div align="center" class="col-md-6">
		<form method="post" action="student_get_new.php">
		<table  class='table table-bordered'>
		<tr>
		<input type="hidden" name = "id" value = <?php echo $row['id'] ?>>
		<td><b>Имя</b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['name'] .
	"' name='name' />"; ?></td>
		</tr>
		<tr>
		<td><b>Фамилия</b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['surname'] .
	"' name='surname' />" ; ?></td>
		</tr>
		<tr>
		<td><b>Пол</b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['sex'] .
	"' name='sex' />"; ?></td>
		</tr>
		<tr>
		<td><b>Год рождения</b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['birth_year'] .
	"' name='birth_year' />"; ?></td>
		</tr>
		<tr>
		<td><b>Факультет</b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['department'] .
	"' name='department' />"; ?></td>
		</tr>
		<tr>
		<td><b>Оценка за ЗНО </b></td>
		<td><?php echo "<input type='chekbox'" . " value='" . $row['eie'] .
	"' name='eie' />" ; ?></td>
		</tr>