<?php
namespace JensTornell\Bricks;

require_once __DIR__ . DS . 'lib' . DS . 'root.php';
require_once __DIR__ . DS . 'lib' . DS . 'types.php';
require_once __DIR__ . DS . 'lib' . DS . 'registry.php';
require_once __DIR__ . DS . 'lib' . DS . 'register.php';
require_once __DIR__ . DS . 'lib' . DS . 'plugins.php';
require_once __DIR__ . DS . 'lib' . DS . 'name.php';
require_once __DIR__ . DS . 'lib' . DS . 'routes.php';
require_once __DIR__ . DS . 'register' . DS . 'base.php';
require_once __DIR__ . DS . 'register' . DS . 'snippet-controller.php';

$plugins = new Plugins();
$register = new Register();
$routes = new Routes();
$SnippetController = new SnippetController();

$routes->set();
$plugins->load();

$register->set();
$SnippetController->set();