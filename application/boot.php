<?php

/**
* Подключаем базовые классы модели, вида и контроллера, запускаем маршрутизатор.
*/

require_once 'models/model.php';
require_once 'views/view.php';
require_once 'controllers/controller.php';
require_once '/application/route.php';

Route::start();
?>