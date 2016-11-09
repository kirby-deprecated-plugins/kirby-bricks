<?php
namespace JensTornell\Bricks;
use JensTornell\Bricks as Bricks;
use c;

include __DIR__ . DS . 'set-folder.php';
include __DIR__ . DS . 'set-folders.php';
include __DIR__ . DS . 'set-file.php';
include __DIR__ . DS . 'set-files.php';
include __DIR__ . DS . 'include-file.php';

class BricksClass {
	public function __construct() {
		$this->loadPlugins();

		$this->set_folder = new Bricks\SetFolder();
		$this->set_folders = new Bricks\SetFolders();
		$this->set_file = new Bricks\SetFile();
		$this->set_files = new Bricks\SetFiles();
		$this->include_file = new Bricks\IncludeFile();

		$this->options = c::get('plugin.bricks.register', array(
			'field',
			'fields',
			'widget',
			'widgets',
			'blueprint',
			'blueprints',
			'controller',
			'controllers',
			'snippet',
			'snippets',
			'template',
			'templates',
			'field-methods',
			'file-methods',
			'filters',
			'hooks',
			'kirbytext-filters',
			'kirbytext-tags',
			'model',
			'options',
			'page-methods',
			'pages-methods',
			'routes',
			'validators'
		));

		$this->data = array(
			'folder' => array(
				'field',
				'widget',
			),
			'folders' => array(
				'fields',
				'widgets',
			),
			'file' => array(
				'blueprint',
				'controller',
				'snippet',
				'template',
			),
			'files' => array(
				'blueprints',
				'controllers',
				'snippets',
				'templates',
			),
			'include' => array(
				'field-methods',
				'file-methods',
				'files-methods',
				'filters',
				'hooks',
				'kirbytext-filters',
				'kirbytext-tags',
				'model',
				'options',
				'page-methods',
				'pages-methods',
				'routes',
				'validators',
			)
		);

		$this->root = ( ! empty( kirby()->roots()->bricks() ) ) ? kirby()->roots()->bricks() : kirby()->roots()->templates();
		$this->root_pattern = $this->root . DS . '*';
		$this->root_glob = glob( $this->root_pattern );
		$this->folders();
	}

	public function loadPlugins() {
		$folders = glob( kirby()->roots()->plugins() . DS . '*', GLOB_ONLYDIR );

		if( ! empty( $folders ) ) {
			foreach( $folders as $folder ) {
				$name = pathinfo($folder, PATHINFO_FILENAME);

				if( $name != 'bricks') {
					kirby()->plugin( $name );
				}
			}
		}
	}

	public function folders() {
		if( ! empty( $this->root_glob )) {
			foreach( $this->root_glob as $dir ) {
				$this->dir = $dir;
				$this->loadFile($dir);
				$this->register( 'folder' );
				$this->register( 'folders' );
				$this->register( 'file' );
				$this->register( 'files' );
				$this->register( 'include' );
			}
		}
	}

	public function loadFile( $dir ) {
		$file = $dir . DS . pathinfo( $dir, PATHINFO_FILENAME ) . '.php';
		if( file_exists( $file ) ) {
			include $file;
		}
	}

	public function register($type) {
		$names = array_intersect( $this->options, $this->data[$type] );
		if( ! empty( $names ) ) {
			foreach( $names as $name ) {
				switch( $type ) {
					case 'folder':
						$this->set_folder->set( $name, $this->dir );
						break;
					case 'folders':
						$this->set_folders->register( $name, $this->dir );
						break;
					case 'file':
						$this->set_file->register( $name, $this->dir );
						break;
					case 'files':
						$this->set_files->register( $name, $this->dir );
						break;
					case 'include':
						$this->include_file->register( $name, $this->dir );
						break;
				}
			}
		}
	}
}

new Bricks\BricksClass();