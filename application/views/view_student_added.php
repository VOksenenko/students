<?php 

/**
* Класс страницы результата добавления нового студента.
*/
class  View_Student_Added extends View {
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top(){
        include "page_student_added.html";
    }
	
	/**
	* Метод генерирует форму добавления нового студента.
	*/
	function generate_form(){
		include "add_form.html";
	}
	
}
?>