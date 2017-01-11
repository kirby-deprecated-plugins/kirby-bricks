# Kirby Bricks

***New version is coming soon***

In the meantime, download the old one here:

https://github.com/jenstornell/kirby-bricks/tree/Version-0.1

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ cd path/to/kirby
$ kirby plugin:install jenstornell/kirby-bricks
```

### 2. Clone or download

1. [Clone](https://github.com/jenstornell/kirby-bricks.git) or [download](https://github.com/jenstornell/kirby-bricks/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `kirby-bricks`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/kirby-bricks/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/jenstornell/kirby-bricks site/plugins/kirby-bricks
```

**Docs**

- https://getkirby.com/docs/templates/snippets
- https://getkirby.com/docs/templates/hello-world
- https://getkirby.com/docs/panel/blueprints
- https://getkirby.com/docs/developer-guide/advanced/controllers

I will use `about` as template in examples in the next steps.

### 6. Load custom files

With every brick a root file will be loaded if it exists. From that file you can include additional files that is not encounted for.

From within that file you can include or register set whatever you want.

## Options

The following option can be set in your `/site/config/config.php` file:

```php
c::set('plugin.bricks.register', array(
  'blueprint',
  'controller',
  'snippet',
  'template',
));
```

### register

If you are concerned about speed and don't want the plugin to look for all the files and folders you can use this option to only select which types to include.

By default everything above is included.

## Common errors

If you get out of memory it probably depends that Kirby can't find a template. Make sure you have a template that is loaded correctly.

https://github.com/getkirby/kirby/issues/512

## Changelog

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-bricks/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)