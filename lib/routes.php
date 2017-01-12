<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use media;
use response;
use f;

$kirby->set('route', array(
	'pattern' => 'assets/bricks/(:all)/(:all)',
	'method'  => 'GET',
	'action'  => function($brick, $path) use($kirby) {
		$this->register = new Bricks\Register();
		$root = $this->register->root() . DS . $brick . DS . $path;
		$file = new Media($root);
		if($file->exists()) {
			return new Response(f::read($root), f::extension($root));
		} else {
			return new Response('The file could not be found', f::extension($path), 404);
		}
	}
));