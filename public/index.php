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
  if(isluimu()) adminIndexController();
  else indexcontroller();
});


$router->get('/smal', function($request) {
  smalController();
});

$router->post('/smal', function($request) {
  adminController();
});

$router->get('/media', function($request) {
  if (isLoggedIn()) mediaController();
  else loginController();
});

$router->get('/add_smal', function($request) {
  if (isLuimu()) addSmalController();
  else indexController();
});

$router->post('/add_smal', function($request) {
  if (isLuimu()) addSmalController();
  else indexController();
});

$router->post('/add_download', function($request) {
  if (isLuimu()) addDownloadController();
  else indexController();
});

$router->get('/add_download', function($request) {
  if (isLuimu()) addDownloadController();
  else indexController();
});

$router->post('/add_media', function($request) {
  if (isLuimu()) addMediaController();
  else indexController();
});

$router->get('/add_media', function($request) {
  if (isLuimu()) addMediaController();
  else indexController();
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