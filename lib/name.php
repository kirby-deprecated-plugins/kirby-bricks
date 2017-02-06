<?php
namespace JensTornell\Bricks;
use c;

class Name {
	function byPath($path) {
		$path = $this->removeRoot($path);
		$name = dirname($path);

		return $this->byFolder($name);
	}

	function removeRoot($path) {
		return str_replace(root() . DS, '', $path);
	}

	function byFolder($name) {
		$prefixes = c::get('plugin.bricks.remove.prefix');

		$explode = explode(DS, $name);
		$output = '';
		foreach($explode as $item) {
			$output .= $this->removePrefix($item) . '/';
		}
		$output = substr($output, 0, -1);
		
		return $output;
	}

	function removePrefix($name) {
		$prefixes = c::get('plugin.bricks.remove.prefix');
		if( is_array( $prefixes ) ) {
			foreach( $prefixes as $prefix ) {
				return $this->removeFromStart($prefix, $name);
			}
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