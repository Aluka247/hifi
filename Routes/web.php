<?php
use App\Controllers\AuthController;
use App\Controllers\UsersController;
use App\Controllers\VideoController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;

use App\Core\Router;

//home controller
Router::get('/home', [HomeController::class, 'index']);

// dashboard controller
Router::get('/dashboard', [DashboardController::class, 'index']);

Router::get('/auth/login', [AuthController::class, 'getLoginForm']);
Router::post('/dashboard', [AuthController::class, 'loginUser']);

//users controller
Router::get('/users', [UsersController::class, 'index']);
Router::get('/users/signup', [UsersController::class, 'create']);
Router::post('/users/store', [UsersController::class, 'store']);
Router::get('/users/edit', [UsersController::class, 'edit']);
Router::put('/users/update', [UsersController::class, 'update']);
Router::delete('/users/delete', [UsersController::class, 'delete']);



//videos controller
Router::get('/videos', [VideoController::class, 'VideoIndex']);
Router::get('/videos/create', [VideoController::class, 'createVideo']);
Router::post('/videos/store', [VideoController::class, 'storeVideo']);
Router::get('/videos/edit', [VideoController::class, 'editVideo']);
Router::put('/videos/update', [VideoController::class, 'updateVideo']);
Router::delete('/videos/delete', [VideoController::class, 'deleteVideo']);



Router::post('/upload', [VideoController::class, 'uploadVideo']);


?>