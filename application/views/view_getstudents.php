<?
/**
* Класс вида страницы со списком всех студентов.
*/
class View_GetStudents extends View {
	
	/**
	* Метод генерирует шаблон страницы.
	*/
	function generate_top()
    {
        include "page_allstudents.html";

    }
	
	/**
	* Метод добавляет кнопку  редактирования и закрывающие теги.
	*/
	function close_page()
    {
        include "button_edit.html";

    }
		
}
	
?>