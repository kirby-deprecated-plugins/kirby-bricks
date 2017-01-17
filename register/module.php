<?php
namespace JensTornell\Bricks;
use str;

class Module extends Base {
	public $name = 'module';

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
			$this->kirby->set('module', $this->Name->byPath( $path ), dirname($path) );
		}
	}
}