<?php
namespace JensTornell\Bricks;
use media;
use response;
use f;
use c;

class Routes {
	public function set() {
		if( c::get('plugin.bricks.assets', true) === true ) {
			global $kirby;
			$kirby->set('route', array(
				'pattern' => 'assets/bricks/(:all)/(:any)',
				'method'  => 'GET',
				'action'  => function($brick, $filename) use($kirby) {
					$this->register = new Register();
					$root = root() . DS . $brick . DS . $filename;
					$file = new Media($root);
					if($file->exists()) {
						return new Response(f::read($root), f::extension($root));
					} else {
						return new Response('The file could not be found', f::extension($filename), 404);
					}
				}
			));
		}
	}
}