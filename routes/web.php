<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController;

// RESTful 资源路由：自动生成 index, create, store, show, edit, update, destroy
// parameter('scores', 'name') 将路由参数从 {score} 改为 {name}
Route::resource('scores', ScoreController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->parameter('scores', 'name');
