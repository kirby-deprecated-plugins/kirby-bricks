<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

include_once __DIR__ . DS . 'lib' . DS . 'register.php';
include_once __DIR__ . DS . 'lib' . DS . 'plugins.php';
include_once __DIR__ . DS . 'lib' . DS . 'name.php';

$plugins = new Bricks\Plugins();
$register = new Bricks\Register();

$plugins->load();
$register->set();

if( in_array( 'snippet-controller', $register->types() ) ) {
	include_once __DIR__ . DS . 'register' . DS . 'snippet-controller.php';
}

if( c::get('plugin.bricks.assets', true) === true ) {
	include_once __DIR__ . DS . 'lib' . DS . 'routes.php';
}