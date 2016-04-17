<?php

	/**
	* Получаем данные из метода модели.
	*/
	require_once "/application/views/view_student_added.php";
	require_once "/application/models/model_student_added.php";
	
	/**
	* Класс контроллера страницы c формой добавления нового студента.
	*/
	class Controller_Student_Added extends Controller{
			
		/**
		* Конструктор экземпляра вида страницы и модели.	
		*/
		function __construct(){	
	    $this->view = new View_Student_Added();
		$this->model = new Model_Student_Added();
		}
			
		/**
		* Генерируем макет страницы.
		*/
		function generate(){	
		$this->view->generate_top();
		}
		
		/**
		* Получаем данные из метода модели.
		*/
		function add_student(){	
		$this->model->add_student();
		}
		
}
	
	/**
	* Создаем экземпляр контроллера страницы.
	*/
	$controller_student_added = new Controller_Student_Added();
			
	/**
	* Запускаем методы контроллера.
	*/
	$controller_student_added -> generate();
	$controller_student_added -> add_student();
	
	
?>