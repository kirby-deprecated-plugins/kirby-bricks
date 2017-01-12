<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

class Controller {
	function register($paths = array()) {
		global $kirby;
		$this->kirby = $kirby;
		$this->paths = $this->paths( $paths );
		$this->name = new Bricks\Name();

		$this->set();
	}

	function paths( $paths = array() ) {
		$controller = array();
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != 'controller.php') continue;
				if( ! file_exists( dirname($path) . DS . 'template.php' ) ) continue;

				$controller[] = $path;
			}
		}
		return $controller;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$this->kirby->set('controller', $this->name->get( $path ), $path );
		}
	}
}