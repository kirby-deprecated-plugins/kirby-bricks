<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;

class SetFile {
	public function register( $filename, $dir ) {
		$extension = 'php';
		if( $filename == 'blueprint') {
			$extension = 'yml';
		}
		
		$filename = $filename . '.' . $extension;
		$file = $dir . DS . $filename;

		if( file_exists( $file ) ) {
			kirby()->set( pathinfo($filename, PATHINFO_FILENAME), pathinfo($dir, PATHINFO_FILENAME), $file );
		}
	}
}