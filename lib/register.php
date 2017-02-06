<?php
namespace JensTornell\Bricks;

class Register {
	public function set() {
		$this->register();
	}

	// Register types
	public function register() {
		$paths = $this->paths();
		foreach( types() as $type ) {
			if( $type == 'snippet-controller') continue;
			if( $type == 'module' && ! kirby()->plugin('modules') ) continue;
			
			require_once dirname(__DIR__) . DS . 'register' . DS . $type . '.php';

			$class = __NAMESPACE__  . '\\' . ucfirst($type);
			$this->{$type} = new $class;
			$this->{$type}->register($paths);
		}
	}

	// Return file paths
	function paths() {
		$paths = array();

		if(!file_exists(root())) {
			die('The bricks folder could not be found');
		}

		$iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(root()),
			\RecursiveIteratorIterator::SELF_FIRST
		);
		$iterator->setFlags( \RecursiveDirectoryIterator::SKIP_DOTS );

		foreach ($iterator as $path) {
			if( $path->isDir() ) continue;
			$paths[] = strval($path);
		}

		$paths = array_merge( $paths, $this->registryPaths() );

		return $paths;
	}

	function registryPaths() {
		global $kirby;
		$folders = $kirby->get('brick');
		$paths = array();

		if( ! empty( $folders ) ) {
			foreach( $folders as $path) {
				$glob = glob($path . DS . '*.*');
				if( ! empty( $glob ) ) {
					foreach( glob($path . DS . '*.*') as $filepath) {
						$paths[] = $filepath;
					}
				}
			}
		}
		return $paths;
	}
}