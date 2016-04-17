<?php

/**
* Класс-маршрутизатор для определения запрашиваемой страницы.
* Генерирует и подключает файлы контроллеров.
*/
class Route
{

	static function start()
	{
		/**
		* По умолчанию, имя контроллера "Main", оно соответствует главной
		* странице. С помощью команды explode, разбиваем строку запроса на
		* части и присваиваем имя контроллера равному тому, что идет за
		* символом '/'.  
		*/
		$controller_name = 'Main';
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		/**
		* Получаем имя контроллера.
		*/
		if ( !empty($routes[1]) ){	
			$controller_name = $routes[1];
		}
		
		/**
		* Добавляем префикс.
		*/
		$controller_name = 'Controller_'.$controller_name;
		
		/**
		* Генерируем файл контроллера и путь к этому файлу.
		*/
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "/application/controllers/".$controller_file;
		
		/**
		* Подключаем файл контроллера. 
		*/		
				
		include "/application/controllers/".$controller_file ;
					
	}
}
