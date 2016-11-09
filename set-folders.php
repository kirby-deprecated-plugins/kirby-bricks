<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;

class SetFolders {
	public function register($type, $dir) {
		$type = substr($type, 0, -1);

		$folders = glob( $dir . DS . $type . 's' . DS . '*', GLOB_ONLYDIR|GLOB_NOSORT );
		if( ! empty( $folders ) ) {
			foreach( $folders as $folder ) {
				$this->set( $type, $folder);
			}
		}
	}
	public function set( $type, $dir ) {
		$filepath = $dir . DS . pathinfo($dir, PATHINFO_FILENAME) . '.php';

		if( file_exists( $filepath) ) {
			kirby()->set( $type, pathinfo($dir, PATHINFO_FILENAME), $dir );
		}
	}
}