<?php

	/**
	* Подключаем классы модели и вида страницы.
	*/
	require_once "/application/models/model_edit.php";
	require_once "/application/views/view_edit.php";
	
	
	/**
	* Объявляем класс контроллера страницы редактирования.
	*/
	class Controller_Edit extends Controller{
	
		
		/**
		* Конструктор экземпляра вида страницы и модели.
		*/
		function __construct(){	
	    $this->view = new View_Edit();
		$this->model = new Model_Edit();
		}
	
		
		/**
		* Метод генерирует макет страницы. Точнее вызывает метод generate_top() 
		* из класса вида этой страницы, который генерирует шаблон  страницы редактирования записи о студенте.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		
		/**
		* Получаем данные о студентах из класса модели этой страницы.
		*/
		function get_data(){
		$this -> model-> get_record();
		}
		
		
		/**
		* Добавляем кнопку отправки данных в БД и закрывающие теги страницы.
		*/
		function close_page(){	
		$this -> view-> close_page();
		}
		
		
}
	/**
	* Создаем экземпляр контроллера.
	*/
	$controller_edit = new Controller_Edit();
	
	/**
	* Запускаем методы контроллера страницы.
	*/
	$controller_edit -> generate();
	$controller_edit -> get_data();
	$controller_edit -> close_page();
?>