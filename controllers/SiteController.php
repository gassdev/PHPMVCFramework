<?php
namespace app\controllers;

use app\core\Application;

/**
 * SiteController
 */
class SiteController
{
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}
