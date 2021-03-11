<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/usuarios', 'UsuarioController@mostrarTodosUsuarios'); 

$router->post('/usuario/cadastar', 'UsuarioController@cadastrar'); 

$router->get('/usuario/{id}', 'UsuarioController@mostrarUmUsuario'); 

$router->get('/usuario/{id}/atualizar', 'UsuarioController@atualizarUsuario'); 
/*
$router->get('/teste', function () use ($router) {
    return '[routes/web.php] Metodo GET URL: /teste';
});

$router->get('/teste', function () use ($router) {
    return '[routes/web.php] Metodo GET URL: /teste';
});*/