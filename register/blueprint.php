<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

class Blueprint {
	function register($paths = array()) {
		global $kirby;
		$this->kirby = $kirby;
		$this->paths = $this->paths( $paths );
		$this->name = new Bricks\Name();

		$this->set();
	}

	function paths( $paths = array() ) {
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != 'blueprint.yml') continue;
				$blueprints[] = $path;
			}
		}
		return $blueprints;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$this->kirby->set('blueprint', $this->name->get( $path ), $path );
		}
	}
}