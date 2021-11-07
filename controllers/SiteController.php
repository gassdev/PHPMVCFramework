<?php
namespace app\controllers;

use app\core\Application;
use app\core\Request;

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

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit();
        return 'Handling submitted data';
    }
}
