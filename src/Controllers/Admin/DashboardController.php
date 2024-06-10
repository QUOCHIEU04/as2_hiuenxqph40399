<?php

namespace Admin\Oop\Controllers\Admin;

use Admin\Oop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
