<?php 

/**
* Класс отображения страницы удаления студента из БД.
*/
class  View_Removed extends View {
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top()    {
        include "page_removed.html";
    }
	
	/**
	* Метод генерирует форму таблицы со списком студентов после удаления.
	*/
	function generate_table()    {
        include "removed_table.html";
    }
	
	/**
	* Метод добавляет кнопку  "Удалить" и закрывающие теги страницы.
	*/
	function close_page()    {
        include "button_removed.html";
    }
		
	}
?>