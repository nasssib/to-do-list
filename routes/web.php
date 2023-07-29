<?php

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
    return view('welcome');
});


Route::get('/new',[

    'uses' =>'PagesController@HI'
]);
Route::get('/todo',[

    'uses' =>'Todos@index'
]);

Route::get('/todo/delete{id}',[

    'uses' =>'Todos@delete',
    'as'=>'todo.delete'
]);

Route::get('/todo/update{id}',[

    'uses' =>'Todos@update',
    'as'=>'todo.update'
]);

Route::get('/todo/completed{id}',[

    'uses' =>'Todos@completed',
    'as'=>'todo.completed'
]);

Route::post('/todo/save{id}',[

    'uses' =>'Todos@save',
    'as'=>'todo.save'
]);

Route::post('/create/todo',[

    'uses'=>'Todos@store' 
]);