<?php
	
	/**
	* Подключаем классы модели и вида страницы со списком студентов.
	*/
	require "/application/models/model_get_all.php";
	require_once "/application/views/view_getstudents.php";
	
	
	/**
	* Класс контроллера страницы со списком всех студентов.
	*/
	class Controller_GetAll extends Controller{
		
		function __construct(){
		
		/**
		* Конструктор создает экземпляр класса вида и модели страницы.
		*/
        $this->view = new View_GetStudents();
		$this->model = new Model_GetAll();
		}
		
		
		/**
		* Метод генерирует шаблон страницы со списком студентов.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		
		/**
		* Получаем данные из метода модели страницы.
		*/
		function get_data(){	
		$this -> model-> get_all();
		}
		
			
		/**
		* Добавляем кнопку редактирования и закрывающие теги страницы.
		*/
		function close_page(){	
		$this -> view-> close_page();
	}
} 
	/**
	* Создаем экземпляр контроллера страницы.
	*/
	$getstudents = new Controller_GetAll();
	//$model = new Model_GetAll();
	
	/**
	* Запускаем методы контроллера.
	*/
	$getstudents -> generate();
	$getstudents -> get_data();
	$getstudents -> close_page();
	
	
?>



