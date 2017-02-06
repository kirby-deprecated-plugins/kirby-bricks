<?php
namespace JensTornell\Bricks;
use c;

function types() {
	$defaults = array(
		'blueprint',
		'controller',
		'load',
		'model',
		'module',
		'snippet',
		'snippet-controller',
		'template',
	);

	return c::get('plugin.bricks.register', $defaults);
}