<?php

	/**
	* Подключаем классы модели и вида страницы.
	*/
	require_once "/application/models/model_toremove.php";
	require_once "/application/views/view_toremove.php";
	
	
	/**
	* Класс контроллера страницы выбора записи для удаления.
	*/
	class Controller_Toremove extends Controller{
	
		
		/**
		* Конструктор экземпляра вида страницы и модели.
		*/
		function __construct(){	
	    $this->view = new View_Toremove();
		$this->model = new Model_Toremove();
		}
	
		
		/**
		* Запускаем метод генерации шаблона страницы из класса вида страницы.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		/**
		* Получаем данные из метода модели.
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
	* Создаем экземпляр контроллера страницы.
	*/
	$controller_toremove = new Controller_Toremove();
	//$model = new Model_Toremove();
		
	/**
	* Запускаем методы контроллера.
	*/
	$controller_toremove -> generate();
	$controller_toremove -> get_data();
	$controller_toremove -> close_page();
?>