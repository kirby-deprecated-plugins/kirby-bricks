<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

class Model {
	function register($paths = array()) {
		$this->paths = $this->paths( $paths );
		$this->set();
	}

	function paths( $paths = array() ) {
		$filepaths = array();
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != 'model.php') continue;
				$filepaths[] = $path;
			}
		}
		return $filepaths;
	}

	function set() {
		foreach( $this->paths as $path ) {
			include $path;
		}
	}
}