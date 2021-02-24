<?php

use App\Models\Example;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $eloquentData = ['content' => []];
    $data = ['content' => new ArrayObject([])];

    $model = new Example($eloquentData);

    dump('JsonEncode ', json_encode($data, JSON_PRETTY_PRINT));
    dump('Eloquent get_class(content)', get_class($model->content));
    dd('Eloquent ::toJson()', $model->toJson(JSON_PRETTY_PRINT));
});
