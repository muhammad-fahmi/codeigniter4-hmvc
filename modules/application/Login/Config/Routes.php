<?php

/** @noinspection ALL */

$routes->group('login', ['namespace' => $hmvcNamespace], function ($routes) {
  $routes->get('/', 'Login::index');
  $routes->match(['get', 'post'], "(:any)", "Login::$1");
});
