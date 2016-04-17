<?php
// Базовый класс View
class View
{
	// Генерируем нужную страницу.
    function generate($page)
    {
        include $page;
    }
	
	
}
	
?>