<?php 

/**
* Класс вида страницы удаления студента из БД.
*/
class  View_Toremove extends View {
		
	/**
	* Метод генерирует макет страницы.
	*/
	function generate_top(){
        include "page_toremove.html";
    }
	
	/**
	* Метод добавляем кнопку "Удалить" и закрывающие теги страницы.
	*/
	function close_page(){
        include "button_toremove.html";
    }
}
?>