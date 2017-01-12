<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

class Template {
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
				if( basename($path) != 'template.php') continue;
				$templates[] = $path;
			}
		}
		return $templates;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$this->kirby->set('template', $this->name->get( $path ), $path );
		}
	}
}