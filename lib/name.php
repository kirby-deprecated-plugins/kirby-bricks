<?php
namespace JensTornell\Bricks;
use c;
use str;

class Name {
	public $prefix_ui = '';

	function byPath($path) {
		$this->prefixUi($path);
		$path = $this->removeRoot($path);
		$name = dirname($path);
		return $this->byFolder($name);
	}

	function removeRoot($path) {
		$path = strtr($path,
			array(
				root() . DS => '',
				kirby()->roots()->plugins() . DS . 'kirby-bricks-ui' . DS . 'bricks' . DS => $this->prefix_ui
			)
		);

		return $path;
	}

	function prefixUi($path) {
		$ui_path = kirby()->roots()->plugins() . DS . 'kirby-bricks-ui' . DS . 'bricks' . DS;
		if(str::startsWith($path, $ui_path)) {
			$this->prefix_ui = 'bricks-ui-';
		}
	}

	function byFolder($name) {
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