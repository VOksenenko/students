<?php

	/**
	* Контроллер главной страницы.
	*/
class Controller_Main extends Controller
{	
	/**
	* В метод generate экземпляра класса View передается имя главной страницы.
	*/
    function main(){	
		$this->view->generate($page = "page_main.html");
		}
	
}
	
	/**
	* Создаем экземпляр класса Controller_Main 
	* и запускаем функцию main() для генерации главной страницы.
	*/
	$main = new Controller_Main();
	$main -> main();
	
?>