# Differences 0.1 > 2.0

## Registry

Version 0.1 registered all these types:

```text
blueprint
blueprints
controller
controllers
template
templates
snippet
snippets
field-methods
file-methods
filters
hooks
kirbytext-filters
kirbytext-tags
model
options
page-methods
pages-methods
routes
validators
field
fields
widget
widgets
```

Many of these things are global stuff. Therefor they will be better inside a plugin.

Version 2.0 are just focusing on the important stuff and leave the rest behind:

```text
blueprint
controller
load
model
module
snippet
template
```

New stuff in this is `load`, `module` and `controller`.

## Load

In version 0.1 you could add a file matching the folder to make it automatically included, like this:

```text
bricks/about/about.php
```

In 2.0 it has been changed to `load.php`, like this:

```text
bricks/about/load.php
```

The benefit of that is that even if you change the brick name you don't need to change the files inside it. It also tells more about what it does.

## Module

If you use the [Modules](https://github.com/getkirby-plugins/modules-plugin) plugin you can now use these modules into bricks, like this:

```text
bricks/gallery/gallery.html.php
bricks/gallery/gallery.yml
```

Bricks will figure out that this is a module automatically and register it.

## Snippet controller

A brick that includes a snippet and a controller can look like this:

```text
bricks/header/snippet.php
bricks/header/controller.php
```

Bricks will figure out that this is a snippet automatically. The controller will be a snippet controller which is used like any other controller but for snippets.

## Nesting

Version 0.1 did not support nested folders. Version 2.0 does support nesting, like this:

```text
bricks/header/logo/snippet.php
bricks/header/logo/controller.php
```

When you call it you do it like this:

```php
snippet('header/logo');
```

Snippet controllers will also work as nested.

## Options

In version 2.0 there is a new option as string:

```php
c::set('plugin.bricks.remove.prefix', 'snippet-');
```

or as array:

```php
c::set('plugin.bricks.remove.prefix', ['snippet-', 'template-']);
```

Maybe you have a folder structure that looks like this:

```text
snippet-header
snippet-footer
template-project
template-projects
```

Without the option you will need to call a snippet like this:

```php
snippet('snippet-header');
```

But because of the option you call it like this instead:

```php
snippet('header');
```

## Root

In version 0.1, if no root was set in `site.php` it fell back to the `template` folder.

In version 2.0 it will fall back to `site/bricks`.

To use another root, add this to `site.php` in domain root:

```php
$kirby = kirby();
$kirby->roots->bricks = $kirby->roots()->site() . DS . 'bricks';
```

## Assets

Just like plugins you can reach assets like images from the bricks folders like this:

```text
https://example.com/assets/bricks/logo/image.svg
```

Special thanks to Christian (seehat) for this.
https://forum.getkirby.com/t/kirby-bricks-files-and-folders-in-a-modular-structure/5721/2