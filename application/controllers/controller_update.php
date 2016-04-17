<?php

	/**
	* Подключаем классы модели и вида страницы.
	*/
	require_once "/application/models/model_update.php";
	require_once "/application/views/view_update.php";
	
	/**
	* Класс контроллера страницы c обновленными данными.
	*/
	class Controller_Update extends Controller{
			
		/**
		* Конструктор экземпляра вида страницы и модели.
		*/
		function __construct(){	
	    $this->view = new View_Update();
		$this->model = new Model_Update();
		}
			
		/**
		* Генерируем макет страницы из метода класса вида страницы.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		/**
		* Получаем данные из БД(из метода модели страницы).
		*/
		function get_data(){	
        $this -> model-> get_update();
		}
		
			
		/**
		* Добавляем кнопку отправки данных в БД и закрывающие теги страницы.
		*/
		function close_page(){	
		$this -> view-> close_page();
		}
	}
	
	/**
	* Создаем экземпляр контроллера.
	*/
	$controller_update = new Controller_Update();
	//$model = new Model_Update();
	
	/**
	* Запускаем методы контроллера.
	*/
	$controller_update -> generate();
	$controller_update -> get_data();
	$controller_update -> close_page();
?>