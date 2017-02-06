# Files

Every brick will try to register supported file types automatically.

**Example brick path:** `site/bricks/about/`

## Types

**The file names below** should match exactly:

```text
blueprint.yml
controller.php
load.php
model.php
snippet.php
template.php
```

**Module** files should match the brick name:

```text
text.html.php
text.yml
```

**Assets** can be called anything:

```text
image.jpg
script.js
style.scss
```

## `load.php`

If `load.php` is present it will autoload this file automatically before the page is rendered. Use it for things like functions, classes, include other files or register unsupported file types.

## Snippet controller

Kirby does not have snippet controllers but Bricks supports it. Read more about
[Snippet Controllers](snippet-controller.md).

## Other files

- [Assets](assets.md) - Unsupported files like `image.jpg`
- [`blueprint.yml`](https://getkirby.com/docs/panel/blueprints)
- [`controller.php`](snippet-controller.md) `snippet.php` + `controller.php`
- [`controller.php`](https://getkirby.com/docs/developer-guide/advanced/controllers) `template.php` + `controller.php`
- [Module](https://github.com/getkirby-plugins/modules-plugin)
- [`snippet.php`](https://getkirby.com/docs/templates/snippets)
- [`template`](https://getkirby.com/docs/templates/hello-world)

## Enable file types

As default it will try to register all supported file types, but you can choose to only allow some of them:

```php
c::set('plugin.bricks.register', array(
  'blueprint',
  'controller',
  'load',
  'model',
  'module',
  'snippet',
  'snippet-controller',
  'template'
));
```