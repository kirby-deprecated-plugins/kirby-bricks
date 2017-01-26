<?php
namespace JensTornell\Bricks;

class Model extends Base {
	public $name = 'model';

	function set() {
		global $kirby;
		if( ! empty( $this->paths ) ) {
			foreach( $this->paths as $path ) {
				require_once $path;

				$modelname = $this->Name->byPath($path);
				$classname = ucfirst($modelname) . 'Page';
				$kirby->set('page::model', $modelname, $classname);
			}
		}
	}
}