<?php

Route::get('/', function() {
	return 'Home Page';
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::model('articles', 'App\Article');

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page can only be viewed by manager';
}]);