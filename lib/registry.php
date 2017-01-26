<?php
namespace Kirby\Registry;

class Brick extends Entry {
	protected static $entries = [];

	public function set($name, $path) {
		static::$entries[$name] = $path;
	}
	public function get($name = null) {
		if(is_null($name)) {
			$entries = [];
			foreach( static::$entries as $entry ) {
				if( is_dir($entry) ) {
					$entries[] = $entry;
				}
			}
			return array_unique($entries);
		}
		if( is_dir(static::$entries[$name] )) {
			return static::$entries[$name];
		}
		return false;
	}
}