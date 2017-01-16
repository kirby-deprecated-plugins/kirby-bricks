<?php
namespace JensTornell\Bricks;

class Register {
	public function set() {
		$this->register();
	}

	// Register types
	public function register() {
		foreach( types() as $type ) {
			if( $type == 'snippet-controller') continue;
			require_once dirname(__DIR__) . DS . 'register' . DS . $type . '.php';

			$class = __NAMESPACE__  . '\\' . ucfirst($type);
			$this->{$type} = new $class;
			$this->{$type}->register($this->paths());
		}
	}

	// Return file paths
	function paths() {
		$paths = array();
		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator(root()),
			\RecursiveIteratorIterator::SELF_FIRST
		);
		$iterator->setFlags( \RecursiveDirectoryIterator::SKIP_DOTS );

		foreach ($iterator as $path) {
			if( $path->isDir() ) continue;
			$paths[] = strval($path);
		}

		return $paths;
	}
}