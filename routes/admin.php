<?php

use Admin\Oop\Controllers\Admin\CategogyController;
use Admin\Oop\Controllers\Admin\DashboardController;
use Admin\Oop\Controllers\Admin\ProductController;
use Admin\Oop\Controllers\Admin\UserController;




$router->before('GET|POST', '/admin/*.*', function () {

    if (!is_logged()) {
        header('location: ' . url('auth/login'));
        exit();
    }

    if (!is_admin()) {
        header('location: ' . url());
        exit();
    }
});

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD PRODUCT
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });
});

//     $router->mount('/categogys', function () use ($router) {
//         $router->get('/',               CategogyController::class . '@index');  // Danh sách
//         $router->get('/create',         CategogyController::class . '@create'); // Show form thêm mới
//         $router->post('/store',         CategogyController::class . '@store');  // Lưu mới vào DB
//         $router->get('/{id}/show',      CategogyController::class . '@show');   // Xem chi tiết
//         $router->get('/{id}/edit',      CategogyController::class . '@edit');   // Show form sửa
//         $router->post('/{id}/update',   CategogyController::class . '@update'); // Lưu sửa vào DB
//         $router->get('/{id}/delete',    CategogyController::class . '@delete'); // Xóa
// });
