<?php
namespace JensTornell\Bricks;
use c;

class Name {
	function get($path) {
		return $this->folder($path);
	}

	function folder($path) {
		$name = dirname($path);
		$name = strtr(
			$name,
			array(
				root() . DS => '',
				DS => '/'
			)
		);
		return $this->unPrefix($name);
	}

	function unPrefix($name) {
		$prefixes = c::get('plugin.bricks.remove.prefix');

		if( is_array( $prefixes ) ) {
			foreach( $prefixes as $prefix ) {
				$name = $this->removeFromStart($prefix, $name);
			}
		} else {
			$name = $this->removeFromStart($prefixes, $name);
		}
		return $name;
	}

	function removeFromStart($prefix, $str) {
		if (substr($str, 0, strlen($prefix)) == $prefix) {
			$str = substr($str, strlen($prefix));
		}
		return $str;
	}
}