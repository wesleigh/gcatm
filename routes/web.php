<?php
Route::group(['middleware' => 'web'], function () {

  Route::get('', 'Redirect@do');

  // Guest
  Route::group(['middleware' => 'guest', 'namespace' => 'Guest'], function () {
    Route::get('login', 'Login@get');
    Route::post('login', 'Login@do');
    Route::get('register', 'Register@get');
   Route::post('register', 'Register@do');
  });

  Route::group(['middleware' => 'user', 'namespace' => 'User'], function () {
    Route::get('dashboard', 'Dashboard@get');
    Route::get('logout', 'Logout@do');

    Route::group(['prefix' => 'users'], function () {
      Route::get('list', 'Users@list');
      Route::get('delete/{id}', 'Users@delete');
      Route::post('create', 'Users@create');
      Route::post('edit', 'Users@edit');
    });

    Route::group(['prefix' => 'devices'], function () {
      Route::get('list', 'Devices@list');
      Route::get('delete/{id}', 'Devices@delete');
      Route::post('create', 'Devices@create');
      Route::post('search', 'Devices@search');
      Route::post('edit', 'Devices@edit');
    });

  });

});
