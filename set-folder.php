<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;

class SetFolder {
	public function set( $type, $dir ) {
		$dirpath = $dir . DS . $type;
		$filepath = $dirpath . DS . pathinfo($dir, PATHINFO_FILENAME) . '.php';

		if( file_exists( $filepath) ) {
			kirby()->set( $type, pathinfo($dir, PATHINFO_FILENAME), $dirpath );
		}
	}
}