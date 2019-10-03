<?php

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

$router->get('api/team[/{id}]', 'TeamController@getTeam');
$router->post('api/team', 'TeamController@createTeam');
$router->put('api/team/{id}', 'TeamController@updateTeam');
$router->delete('api/team/{id}', 'TeamController@deleteTeam');


$router->get('api/player[/{id}]', 'PlayerController@getPlayer');
$router->post('api/player', 'PlayerController@createPlayer');
$router->put('api/player/{id}', 'PlayerController@updatePlayer');
$router->delete('api/player/{id}', 'PlayerController@deletePlayer');
$router->get('api/player/{id}/uploadimage', 'PlayerController@uploadPlayerImage');

$router->get('api/player/{id}/history', 'PlayerController@getPlayerHistory');
$router->get('api/match[/{id}]', 'MatchController@getMatch');
//$router->get('api/team/{id}/match', 'MatchController@getMatchTeamWise');
//$router->get('api/team/{id}/fixture', 'MatchController@getFixtureTeamWise');
