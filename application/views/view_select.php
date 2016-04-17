<?php 
/**
* Класс отображения страницы выбора записи для редактирования.
*/
class  View_Select extends View {
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top()
    {
        include "page_select.html";

    }
	
	/**
	* Метод добавляет кнопку редактирования и закрывающие теги.
	*/	
	function close_page(){
        include "button_select.html";
    }
		
}
?>