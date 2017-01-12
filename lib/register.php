<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class Register {
	public function set() {
		$this->root = $this->root();
		$this->types = $this->types();
		$this->paths = $this->paths($this->root);

		$this->register();
	}

	// Register types
	public function register() {
		foreach( $this->types as $type ) {
			if( $type == 'snippet-controller') continue;
			include_once dirname(__DIR__) . DS . 'register' . DS . $type . '.php';

			$class = __NAMESPACE__  . '\\' . ucfirst($type);
			$this->{$type} = new $class;
			$this->{$type}->register($this->paths);
		}
	}

	// Return allowed types
	public function types() {
		$this->data = array(
			'blueprint',
			'controller',
			'load',
			'module',
			'snippet',
			'snippet-controller',
			'template',
		);

		$this->options = c::get('plugin.bricks.register', $this->data);

		$this->types = array_intersect( $this->options, $this->data );
		return $this->types;
	}

	// Return root
	public function root() {
		if( ! empty( kirby()->roots()->bricks() ) ) {
			return kirby()->roots()->bricks();
		 }
		 return kirby()->roots()->site() . DS . 'bricks';
	}

	// Return file paths
	function paths($path) {
		$paths = array();
		$iterator = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($path),
			RecursiveIteratorIterator::SELF_FIRST
		);
		$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

		foreach ($iterator as $path) {
			if( $path->isDir() ) continue;
			$paths[] = strval($path);
		}

		return $paths;
	}
}