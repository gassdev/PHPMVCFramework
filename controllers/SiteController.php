<?php
namespace app\controllers;

use app\core\Application;

/**
 * SiteController
 */
class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Gassdev',
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}
