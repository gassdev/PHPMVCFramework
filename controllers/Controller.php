<?php
namespace app\controllers;

use app\core\Application;

/**
 * Controller
 */
class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
