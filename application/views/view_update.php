<?php 
/**
* Класс вида страницы после внесения изменений о студенте.
*/

class  View_Update extends View {
		
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top(){
        include "page_update.html";
    }
		
	/**
	* Метод добавляет кнопку для редактирования и закрывющие теги вконце страницы.
	*/
	function close_page(){
        include "button_edit.html";
    }
}
?>