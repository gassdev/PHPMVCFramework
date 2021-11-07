<?php
namespace app\controllers;

use app\core\Application;

/**
 * SiteController
 */
class SiteController
{
    public function home()
    {
        $params = [
            'name' => 'Gassdev',
        ];
        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}
