# Folders

## Root path

The default root path is `site/bricks/` but it's possible to change it.

Add this to your `site.php` file in your domain root:


```php
$kirby = kirby();
$kirby->roots->bricks = $kirby->roots()->site() . DS . 'bricks';
```

## Bricks folder structure

Because there is an option to remove a prefixed string in the folder name you can have your own folder structure.

### Example 1 - Mixed

A mix with templates, snippets and modules:

```text
default
home
header
footer
gallery
text
```

### Example 2 - Prefixed types

Prefixed types:

```text
module-gallery
module-text
snippet-header
snippet-footer
template-default
template-home
```

It will require to use this config in `config.php`:

```php
c::set('plugin.bricks.remove.prefix', ['module-', 'snippet-', 'template-']);
```

It will remove the prefixes from the calls so you can still use this:

```php
snippet('header');
```

### Example 3 - Prefixed short types

Prefixed types:

```text
mod-gallery
mod-text
spt-header
spt-footer
tpl-default
tpl-home
```

It will require to use this config in `config.php`:

```php
c::set('plugin.bricks.remove.prefix', ['mod-', 'spt-', 'tpl-']);
```

It will remove the prefixes from the calls so you can still use this:

```php
snippet('header');
```

## Nesting

Even if you nest folders, the supported file types in the nested folders will be registered. While it does not suit every file type it's especially good for snippets.