<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('admin/sections', function(){
    return View::make('admin/sections/list');
});

Route::get('admin/sections/create', function(){
    return View::make('admin/sections/create');
});

Route::post('admin/sections', function(){
    $section = Section::create(Input::all());

    return Redirect::to('admin/sections/'. $section->id);
});

Route::get('admin/sections/{id}', function($id){

    $section = Section::find($id);
    return View::make('admin/sections/show')->with('section', $section);
});