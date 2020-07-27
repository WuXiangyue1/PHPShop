<?php

use think\facade\Route;


Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');

Route::get('api/:id','api/Index/index');



