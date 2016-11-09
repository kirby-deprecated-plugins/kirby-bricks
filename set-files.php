<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;

class SetFiles {
	public function register($type, $dir) {
		$type = substr($type, 0, -1);

		$extension = 'php';
		if( $type == 'blueprint') {
			$extension = 'yml';
		}

		$folders = glob( $dir . DS . $type . 's' . DS . '*' );

		if( ! empty( $folders ) ) {
			foreach( $folders as $folder ) {
				$this->set( $type, $folder, $extension);
			}
		}
	}
	public function set( $type, $dir, $extension ) {		
		$file = $dir . DS . pathinfo($dir, PATHINFO_FILENAME) . '.' . $extension;
		if( file_exists( $file ) ) {
			kirby()->set( $type, pathinfo($file, PATHINFO_FILENAME), $file );
		}
	}
}