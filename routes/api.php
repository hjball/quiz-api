<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// we can group all our articles routes together
$router->group(["prefix" => "categories"], function ($router) {
	// use the post method
	// when the use request /articles - don't need the forward slash
	// which will call the store method of the Articles controller
	$router->post("", "Categories@store");
	$router->get("", "Categories@index");

    // ...previous routes...

    // // {article} is a url parameter representing the id we want
    // $router->get("{article}", "Articles@show");

    // $router->put("{article}", "Articles@update");

    // $router->delete("{article}", "Articles@destroy");


    // //Comments
    // $router->post("{article}/comments", "Comments@store");
    // $router->get("{article}/comments", "Comments@index");

    // $router->delete("{article}/comments/{comment}", "Comments@destroySingle");
    // $router->delete("{article}/comments", "Comments@destroyAll");
});


$router->group(["prefix" => "quiz"], function ($router) {
    // use the post method
    // when the use request /articles - don't need the forward slash
    // which will call the store method of the Articles controller
    $router->post("", "QuizActives@store");
    $router->get("", "QuizActives@index");
});



$router->group(["prefix" => "questions"], function ($router){
    $router->post("{category}", "Questions@store");
    $router->get("", "Questions@index");
});
