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

/* Main Page */
Route::get('/', 'IndexController@index');

/* Contact Form Routes */
Route::get('/contact/create',        'ContactController@create');
Route::post('/contact',              'ContactController@store');
Route::get('/contact',               'ContactController@index');
Route::get('/contact/{id}',          'ContactController@show');
Route::get('/contact/{id}/edit',     'ContactController@edit');
Route::patch('/contact/update/{id}', 'ContactController@update');
Route::get('/contact/destroy/{id}',  'ContactController@destroy');

/*
RESTFUL CONVENTIONS

View all of the posts
GET /posts

Create a post: i.e. display a form
GET /posts/create

When you submit a post, store in database
POST /posts

Edit an existing post. Display form to edit post
GET /posts/{id}/edit

When you submit the edit form
PATCH /posts/{id}

Displays a single post
GET /posts/{id}

If you click a button delete post, this will instruct the server to delete a post
DELETE /posts/{id}
 */