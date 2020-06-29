<?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

require_once 'router/Request.php';
require_once 'router/Router.php';
require_once 'database/connection.php';
require_once 'libraries/helpers.php';
require_once 'controllers/usercontroller.php';
require_once 'controllers/indexcontroller.php';
require_once 'controllers/smalcontroller.php';
require_once 'controllers/mediacontroller.php';

$router = new Router(new Request);

$router->get('/', function($request) {
  if(isLoggedIn()) loggedController();
  else indexcontroller();
});


$router->get('/smal', function($request) {
  smalController();
});


$router->get('/media', function($request) {
  mediaController();
});

$router->post('/smal', function($request) {
  adminController();
});

$router->get('/login', function($request) {
  loginController();
});

$router->post('/login', function($request) {
  loginController();
});

$router->get('/register', function($request) {
  registeringController();
});
$router->post('/register', function($request) {
  registeringController();
});

$router->get('/logout', function($request) {
  logoutController();
});

?>