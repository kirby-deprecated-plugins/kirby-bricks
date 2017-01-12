<?php
class SnippetController {
	public function set($name, $data) {
		$this->name = new JensTornell\Bricks\Name();
		$this->register = new JensTornell\Bricks\Register();
		
		$site = site();
		$page = page();

		$name = $this->name->unPrefix($name);
		$controller = $this->register->root() . DS . $name . DS . 'controller.php';

		if( file_exists( $controller ) ) {
			$callback = include $controller;
			$callback_data = $callback( $site, $site->children(), $page, $data );
			$data = array_merge($data, $callback_data);
		}

		return $data;
	}
}

class SnippetControllerComponent extends Kirby\Component\Snippet {
	public function render($name, $data = [], $return = false) {

		if(is_object($data)) $data = ['item' => $data];

		$this->controller = new SnippetController();
		$data = $this->controller->set($name, $data);

		return tpl::load($this->kirby->registry->get('snippet', $name), $data, $return);
	}
}

$kirby->set('component', 'snippet', 'SnippetControllerComponent');