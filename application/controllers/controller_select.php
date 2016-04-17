<?php 

	/**
	* Подключаем классы модели и вида страницы.
	*/
	require_once "/application/models/model_select.php";
	require_once "/application/views/view_select.php";
	
	/**
	* Создаем класс контроллера страницы выбора записи для редактирования.
	*/
	class Controller_Select extends Controller{
			
		/**
		* Конструктор экземпляра вида страницы.
		*/
		function __construct(){	
	    $this->view = new View_Select();
		$this->model = new Model_Select();
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
		function get_data(){	
        $this -> model-> get_all();
		}
		
		
		/**
		* Добавляем кнопку редактирования и закрывающие теги страницы.	
		*/
		function close_page(){	
		$this -> view-> close_page();
		}
}
	/**
	* Подключаем классы модели и вида страницы.
	*/
	$controller_select = new Controller_Select();
	//$model = new Model_Select();
	
	/**
	* Запускаем методы контроллера.
	*/
	$controller_select -> generate();
	$controller_select -> get_data();
	$controller_select -> close_page();
	
	
?>