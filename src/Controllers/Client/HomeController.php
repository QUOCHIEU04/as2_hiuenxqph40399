<?php

namespace Admin\Oop\Controllers\Client;

use Admin\Oop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'hieunxqph40399';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}