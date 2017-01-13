<?php
namespace JensTornell\Bricks;

include_once __DIR__ . DS . 'lib' . DS . 'root.php';
include_once __DIR__ . DS . 'lib' . DS . 'types.php';
include_once __DIR__ . DS . 'lib' . DS . 'register.php';
include_once __DIR__ . DS . 'lib' . DS . 'plugins.php';
include_once __DIR__ . DS . 'lib' . DS . 'name.php';
include_once __DIR__ . DS . 'lib' . DS . 'routes.php';
include_once __DIR__ . DS . 'register' . DS . 'snippet-controller.php';

$plugins = new Plugins();
$register = new Register();
$routes = new Routes();
$SnippetController = new SnippetController();

$routes->set();
$plugins->load();
$register->set();
$SnippetController->set();

class ProjectPage extends \Page {
  public function cover() {
    return $this->image('cover');
  }
}

// I think Kirby loader requires full class name
$kirby->set('page::model', 'project', 'JensTornell\Bricks\ProjectPage');