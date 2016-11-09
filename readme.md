# Kirby Bricks

*Version 0.1*

Instead of group the part by type like `templates`, `blueprints` and `controllers`, group them by modules, called bricks.

**"Old" Native structure**

```text
templates/about.php
templates/contact.php
templates/projects.php

blueprints/about.yml
blueprints/contact.yml
blueprints/projects.yml

controllers/about.php
controllers/contact.php
controllers/projects.php
```

**New Bricks structure**

```text
about/template.php
about/blueprint.yml
about/controller.php

contact/template.php
contact/blueprint.yml
contact/controller.php

projects/template.php
projects/blueprint.yml
projects/controller.php
```

**Benefits with Bricks**

- It's modular. Delete `about` and everything bound to `about` will be gone.
- Everything is right there, not spread out through several folders.
- It can give a better overview of what parts you use and which you don't.

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

## Setup (optional)

By default `bricks` is used as folder but I recommend to change that.

```php
$kirby = kirby();
$kirby->roots->bricks = $kirby->roots()->templates();
```

Now all the bricks should be placed into `templates`.

If you already have template files there from the "old" structure, they will continue to work.

For example, if there is a `default.php` and some template in the new structure is missing, it will run instead.

### Change `bricks` to `templates`

```php
c::set('plugin.bricks.register', array('controller'));
```

## Usage

Because I recommend to use `templates` instead of `bricks` (see setup), I will use `templates` in these examples.

### 1. Create your brick

Add a folder to `site/templates`, for example `about` which should look like this:

```text
site/templates/about/
```

### 2. Add single files

I use `about` as template in this example.

**Recommended files to use:**

```text
site/templates/about/blueprint.yml
site/templates/about/controller.php
site/templates/about/template.php
```

**These will be automatically loaded as well, if the exists:**

```text
site/templates/about/snippet.php
site/templates/about/field-methods.php
site/templates/about/file-methods.php
site/templates/about/filters.php
site/templates/about/hooks.php
site/templates/about/kirbytext-filters.php
site/templates/about/kirbytext-tags.php
site/templates/about/model.php
site/templates/about/options.php
site/templates/about/page-methods.php
site/templates/about/pages-methods.php
site/templates/about/routes.php
site/templates/about/validators.php
```

**Docs**

- https://getkirby.com/docs/templates/snippets
- https://getkirby.com/docs/developer-guide/objects/fields
- https://getkirby.com/docs/developer-guide/objects/file
- https://getkirby.com/docs/developer-guide/objects/collections
- https://getkirby.com/docs/developer-guide/advanced/hooks
- https://getkirby.com/docs/developer-guide/kirbytext/filters
- https://getkirby.com/docs/developer-guide/kirbytext/tags
- https://getkirby.com/docs/developer-guide/advanced/models
- https://getkirby.com/docs/developer-guide/plugins/registry
- https://getkirby.com/docs/developer-guide/objects/page
- https://getkirby.com/docs/developer-guide/objects/pages
- https://getkirby.com/docs/developer-guide/toolkit/routing
- https://getkirby.com/docs/developer-guide/objects/validators

I will use `about` as template in examples in the next steps.

### 3. Add multiple files

**These will be automatically loaded, if they exists:**

```text
site/templates/about/blueprints/*.yml
site/templates/about/controllers/*.php
site/templates/about/snippets/*.php
site/templates/about/templates/*.php
```

**Example**

You can register multiple blueprints if you need to. In this example I focus on the blueprint.

```text
site/templates/about/blueprints/about.yml
site/templates/about/blueprints/about-placeholder.yml
site/templates/about/blueprints/about-custom.yml
```

For docs, see previous chapter.

### 4. Add single folders

**These will be automatically loaded if they exists:**

```text
site/templates/about/field/*
site/templates/about/widget/*
```

**Example**

You can register single fields and widgets. In this example I focus on the field.

```text
site/templates/about/field/field.php
site/templates/about/field/assets/css/field.css
site/templates/about/field/assets/js/field.js
```

**Docs**

- https://getkirby.com/docs/developer-guide/panel/widgets
- https://getkirby.com/docs/developer-guide/panel/fields

### 5. Add multiple folders

**These will be automatically loaded if they exists:**

```text
site/templates/about/fields/*
site/templates/about/widgets/*
```

**Example**

You can register multiple fields and widgets. In this example I focus on the fields.

```text
site/templates/about/fields/input/
site/templates/about/fields/textarea/
```

### 6. Load custom files

With every brick a root file will be loaded if it exists. From that file you can include additional files that is not encounted for.

**Example**

```text
site/templates/about/about.php
```

From within that file you can include or register set whatever you want.

## Options

The following option can be set in your `/site/config/config.php` file:

```php
c::set('plugin.bricks.register', array(
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