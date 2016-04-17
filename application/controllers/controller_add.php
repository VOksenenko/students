<?php

	/**
	* Подключаем класс вида страницы добавления нового студента.
	*/
	require_once "/application/views/view_add.php";
	
	/**
	* Класс контроллера страницы c формой добавления нового студента.
	*/
	class Controller_Add extends Controller{
	
		
		/**
		* Конструктор экземпляра вида страницы и модели.
		*/
		function __construct(){	
	    $this->view = new View_Add();
		
		}
	
		/**
		* Метод генерируем макет страницы.
		*/
		function generate(){	
		$this->view->generate_top();
		
		}
		
		
		/**
		* Метод генерирует форму добавления нового студента.
		*/
		function generate_form(){	
		$this->view->generate_form();
		}
}
	
	/**
	* Создаем экземпляр контроллера страницы.
	*/
	$controller_add = new Controller_Add();
			
	
	/**
	* Запускаем методы контроллера.
	*/
	$controller_add -> generate();
	$controller_add -> generate_form();
	
	
?>