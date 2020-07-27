<?php


Route::view('/','home')->name('home');
Route::get('/servicio', 'servicioController')->name('servicio');

Route::resource('ayuda', 'ProjectController')
->names('projects')
->parameters(['ayuda'=> 'project']);
//->middleware('auth');

//--Estudiantes--
Route::get('/estudiantes', 'EstudianteController@index')->name('estud.index');
Route::get('/estudiantes/crear', 'EstudianteController@create')->name('estud.create');
Route::get('/estudiantes/{estudiante}/editar', 'EstudianteController@edit')->name('estud.edit');
Route::patch('/estudiantes/{estudiante}', 'EstudianteController@update')->name('estud.update');
Route::post('/estudiantes', 'EstudianteController@store')->name('estud.store');
Route::get('/estudiantes/{id}', 'EstudianteController@show')->name('estud.show');
Route::delete('/estudiantes/{estudiante}', 'EstudianteController@destroy')->name('estud.destroy');
//--Docentes
Route::get('/docentes', 'DocenteController@index')->name('Docentes.index');
Route::get('/docentes/crear', 'DocenteController@create')->name('Docentes.create');
Route::get('/docentes/{docente}/editar', 'DocenteController@edit')->name('Docentes.edit');
Route::patch('/docentes/{docente}', 'DocenteController@update')->name('Docentes.update');
Route::post('/docentes', 'DocenteController@store')->name('Docentes.store');
Route::get('/docentes/{id}', 'DocenteController@show')->name('Docentes.show');
Route::delete('/docentes/{docente}', 'DocenteController@destroy')->name('Docentes.destroy');

Route::view('/inicio', 'inicio')->name('inicio');

Route::get('/contactos','homeController')->name('contactos');
Route::post('contactos', 'mensajeController@store')->name('messages.store');

Auth::routes(['register' => true]); 

//Route::resource('proyectos', 'ayudaController');

//Route::get('/ayuda','ProjectController@index')->name('projects.index');
//Route::get('/ayuda/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/ayuda/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/ayuda/{project}', 'ProjectController@update')->name('projects.update');
//Route::post('/ayuda','ProjectController@store')->name('projects.store');
//Route::get('/ayuda/{id}', 'ProjectController@show')->name('projects.show');
//Route::delete('/ayuda/{project}', 'ProjectController@destroy')->name('projects.destroy');



