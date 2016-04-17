<?php

	/**
	* Подключаем классы модели и вида страницы.
	*/
	require_once "/application/models/model_removed.php";
	require_once "/application/views/view_removed.php";
	
	
	/**
	* Класс контроллера страницы cо списком студентов после удаления.
	*/
	class Controller_Removed extends Controller{
	
		
		/**
		* Конструктор экземпляра вида страницы и модели.
		*/
		function __construct(){	
	    $this->view = new View_Removed();
		$this->model = new Model_Removed();
		}
		
		/**
		* Генерируем макет страницы.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		/**
		* Получаем данные из метода модели страницы.
		*/
		function get_data(){	
		$this -> model-> get_all();
		}
		
		 
		/**
		* Добавляем кнопку отправки данных в БД и закрывающие теги страницы.	
		*/
		function close_page(){	
		$this -> view-> close_page();
		}
	}
	
	/**
	* Создаем экземпляр контроллера 
	*/
	$controller_removed = new Controller_Removed();
	//$model = new Model_Removed();
	
	/**
	* Запускаем методы контроллера.
	*/
	$controller_removed -> generate();
	$controller_removed -> get_data();
	
?>