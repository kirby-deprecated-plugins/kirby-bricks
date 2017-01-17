<?php
namespace JensTornell\Bricks;

class Controller extends Base{
	public $name = 'controller';

	function paths( $paths = array() ) {
		$controller = array();
		if( ! empty( $paths ) ) {
			foreach( $paths as $path ) {
				if( basename($path) != $this->name . '.' . $this->extension) continue;
				if( ! file_exists( dirname($path) . DS . 'template.php' ) ) continue;

				$controller[] = $path;
			}
		}
		return $controller;
	}
}