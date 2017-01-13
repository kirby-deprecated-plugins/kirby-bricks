<?php
namespace JensTornell\Bricks;

function types() {
	$defaults = array(
		'blueprint',
		'controller',
		'load',
		'module',
		'snippet',
		'snippet-controller',
		'template',
	);

	$types = \c::get('plugin.bricks.register', $defaults);
	return array_intersect( $types, $defaults );
}