<?php 
/**
* Класс вида страницы редактирования записи о студенте.
*/
class  View_Edit extends View {
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top()
    {
        include "page_edit.html";
    }
	
	/**
	* Метод добавляет кнопку отправки и закрывающие теги.
	*/
	function close_page()
    {
        include "close.html";
    }
		
	}
?>