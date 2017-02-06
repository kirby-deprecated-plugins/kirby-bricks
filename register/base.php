<?php
namespace JensTornell\Bricks;

class Base {
	public $extension = 'php';

	function register($paths = array()) {
		global $kirby;
		$this->kirby = $kirby;
		$this->paths = $this->paths( $paths );
		$this->Name = new Name();

		$this->set();
	}

	function paths( $paths = array() ) {
		$filepaths = array();
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != $this->name . '.' . $this->extension) continue;
				$filepaths[] = $path;
			}
		}
		return $filepaths;
	}

	function set() {
		foreach( $this->paths as $path ) {
			$this->kirby->set($this->name, $this->Name->byPath( $path ), $path );
		}
	}
}