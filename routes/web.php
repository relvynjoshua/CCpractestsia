<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
$router->get('/users',['uses' => 'TeacherController@get']);
    
});
$router->get('/users', 'TeacherController@get'); // GET teacher RECORDS
$router->post('/ADDusers', 'TeacherController@addUser'); // ADD new teacher RECORD
$router->delete('/DELETEusers/{id}', 'TeacherController@deleteTeacher'); // DELETE teacher RECORD
$router->put('/UPDATEusers/{id}', 'TeacherController@updateTeacher'); // UPDATE teacher RECORD
$router->get('/SEARCHusers/{id}', 'TeacherController@getTeacherId'); // SEARCH teacher RECORD
$router->get('/GETusers', 'TeacherController@get'); // VIEW ALL teachers RECORDS