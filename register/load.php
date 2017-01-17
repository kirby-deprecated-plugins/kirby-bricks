<?php
namespace JensTornell\Bricks;

class Load extends Base {
	public $name = 'load';

	function set() {
		foreach( $this->paths as $path ) {
			require_once $path;
		}
	}
}