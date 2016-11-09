<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;

class IncludeFile {
	public function register($type, $dir) {
		$file = $dir . DS . $type . '.php';
		if( file_exists( $file ) ) {
			include $file;
		}
	}
}