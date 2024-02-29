<?php

/** @noinspection ALL */

$routes->group('register', ['namespace' => $hmvcNamespace], function ($routes) {
  $routes->get('/', 'Register::index');
  $routes->match(['get', 'post'], "(:any)", "Register::$1");
});
