<!--Форма добавления нового студента -->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<!--Если какое-то поле не будет заполнено, то страница перезагрузиться. -->
		<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<div class="form-group">
		<h3>Введите данные студента для добавления</h3>
		<label for="name">Имя </label>
		<!--В качестве значения атрибута value используются php - код, который выводит введенное ранее значение, чтобы в случае, если какое-то поле было не заполнено, не нужно было заполнять все поля заново.  -->
		<input type="text" class="form-control" name="name" placeholder="Имя" value='<?php echo $name ;// выводится ранее введенное значение имени ?>'>
		
		<label for="surname">Фамилия </label>
		<input type="text" class="form-control" name="surname" placeholder="Фамилия" value='<?php echo $surname ;// выводится фамилия?>' ></div>
		
		<div>
		<label for="sex">Пол </label><br>
			<label class="radio-inline">
				<input type="radio" name="radio"  value="м"> мужской
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio" value="ж"> женский
			</label>
		</div><br>
		
		<div class="form-group">
		<label for="birth_year">Год рождения</label> 
		<input type="text" class="form-control" name="birth_year" placeholder="1987" value='<?php echo $birth_year ;// год рождения?>'>
		
		<label for="department">Факультет </label>
		<input type="text" class="form-control" name="department" placeholder="Факультет" value='<?php echo $department ;// факультет?>'>
		
		<label for="eie">Балл по ЗНО </label>
		<input type="text" class="form-control" name="eie" placeholder="200" value='<?php echo $eie ;// оценка ЗНО. ?>'>
		
		<br><br>
		<!--Кнопка отправить под формой -->
		<button  type="submit" class="form-control mygreen">Отправить</button>
		</div>	
		</form>
		</div>
	<div class="col-md-3"></div>
</div>

	
