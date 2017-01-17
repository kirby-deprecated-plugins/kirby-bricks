<?php
namespace JensTornell\Bricks;
use c;

class Name {
	function byPath($path) {
		$name = dirname($path);
		$name = strtr(
			$name,
			array(
				root() . DS => '',
				DS => '/'
			)
		);
		return $this->byFolder($name);
	}

	function byFolder($name) {
		$prefixes = c::get('plugin.bricks.remove.prefix');

		if( is_array( $prefixes ) ) {
			foreach( $prefixes as $prefix ) {
				$name = $this->removeFromStart($prefix, $name);
			}
			return $name;
		}
		return $this->removeFromStart($prefixes, $name);
	}

	function removeFromStart($prefix, $str) {
		if (substr($str, 0, strlen($prefix)) == $prefix) {
			$str = substr($str, strlen($prefix));
		}
		return $str;
	}
}