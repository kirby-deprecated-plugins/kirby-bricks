<?php
namespace JensTornell\Bricks;

class Model {
	function register($paths = array()) {
		$this->name = new Name();
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
		global $kirby;
		foreach( $this->paths as $path ) {
			require_once $path;

			$modelname = $this->name->get($path);
			$classname = ucfirst($modelname) . 'Page';
			$kirby->set('page::model', $modelname, $classname);
		}
	}
}