<?php
namespace JensTornell\Bricks;
use str;

class Module {
	function register($paths = array()) {
		if( kirby()->plugin('modules') ) {
			global $kirby;
			$this->kirby = $kirby;
			$this->paths = $this->paths( $paths );
			$this->name = new Name();

			$this->set();
		}
	}

	function paths( $paths = array() ) {
		$filepaths = array();
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( ! str::before($path, '.html.php') ) continue;
				$filepaths[] = $path;
			}
		}
		return $filepaths;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$this->kirby->set('module', $this->name->get( $path ), dirname($path) );
		}
	}
}