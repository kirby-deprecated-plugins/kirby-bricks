<?php
namespace JensTornell\Bricks;

class Snippet {
	function register($paths = array()) {
		global $kirby;
		$this->kirby = $kirby;
		$this->paths = $this->paths( $paths );
		$this->name = new Name();

		$this->set();
	}

	function paths( $paths = array() ) {
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != 'snippet.php') continue;
				$templates[] = $path;
			}
		}
		return $templates;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$name = $this->name->get( $path );
			$this->kirby->set('snippet', $this->name->get( $path ), $path );
		}
	}
}