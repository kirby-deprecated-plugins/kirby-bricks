<?php
namespace JensTornell\Bricks;

class SnippetController {
	public function set() {
		global $kirby;

		if( in_array( 'snippet-controller', types() ) ) {
			$kirby->set('component', 'snippet', 'JensTornell\Bricks\SnippetControllerComponent');
		}
	}
	public function data($name, $filepath, $data) {
		$filepath = dirname($filepath) . DS . 'controller.php';

		if( file_exists( $filepath ) ) {
			$callback = include $filepath;
			$callback_data = $callback( site(), site()->children(), page(), $data );
			$data = array_merge($data, $callback_data);
		}

		return $data;
	}
}

class SnippetControllerComponent extends \Kirby\Component\Snippet {
	public function render($name, $data = [], $return = false) {
		if(is_object($data)) $data = ['item' => $data];

		$filepath = $this->kirby->registry->get('snippet', $name);

		$controller = new SnippetController();
		$data = $controller->data($name, $filepath, $data);

		return \tpl::load($filepath, $data, $return);
	}
}