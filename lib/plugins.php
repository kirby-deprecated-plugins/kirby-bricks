<?php
namespace JensTornell\Bricks;

class Plugins {
	public function load() {
		$folders = glob( kirby()->roots()->plugins() . DS . '*', GLOB_ONLYDIR );

		if( ! empty( $folders ) ) {
			foreach( $folders as $folder ) {
				$name = pathinfo($folder, PATHINFO_FILENAME);

				if( $name != 'kirby-bricks') {
					kirby()->plugin( $name );
				}
			}
		}
	}
}