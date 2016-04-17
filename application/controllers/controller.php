<?php
/**
* Базовый класс контроллера.
*/

class Controller {
    
    public $model;
    public $view;
    	
	/**
	*Конструктор создания экземпляра класса View
	*/
    function __construct()
    {
        $this->view = new View();
		
    }
    	
	}
?>