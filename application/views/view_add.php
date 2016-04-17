<?php 

/**
* Класс вида страницы с формой добавления нового студента.
*/
class  View_Add extends View {
	
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top(){
        include "page_add.html";
    }
	
	/**
	* Метод генерирует форму добавления нового студента.
	*/
	function generate_form(){
		include "add_form.html";
	}
	
}
?>