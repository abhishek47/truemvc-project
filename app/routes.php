<?php


$router->get('' , 'PagesController@index');

$router->get('about' , 'PagesController@about');

$router->get('contact' , 'PagesController@contact');

$router->get('todos' , 'TodosController@index');

$router->get('delete-todo' , 'TodosController@destroy');

$router->post('todos' , 'TodosController@store');



