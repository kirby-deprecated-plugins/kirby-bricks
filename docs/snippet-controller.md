# Snippet controller

A snippet controller is a great way to separate logic from presentation.

## Snippet file is required

- To make a snippet controller, it's required to have a `controller.php` and a `snippet.php` file.
- If you add a `template.php` to the brick it will treat it as a template controller so avoid that.

**Inside `bricks/header/`:**

```text
snippet.php
controller.php
```

**Be aware:** If a `template.php` is included, the controller will instead be loaded as a template controller.

## Simple usage

**Inside `bricks/header/controller.php`:**

```php
<?php
return function($site, $pages, $page) {
  return array(
    'foo' => 'my first template variable',
    'bar' => 'my second template variable'
  );
};
```

**Inside `bricks/header/snippet.php`:**

```php
echo $foo;
```

**Snippet call inside a template:**

```php
snippet('header');
```

**This will output:**

```text
my first template variable
```

## Override arguments

**Inside `bricks/header/controller.php`:**

```php
<?php
return function($site, $pages, $page, $args) {
  return array(
    'foo' => $args['logo'],
    'bar' => 'my second template variable'
  );
};
```

Notice `$args` and `$args['logo']` in the code above. 

**Inside `bricks/header/snippet.php`:**

```php
echo $foo;
```

**Snippet call inside a template:**

```php
snippet('header', array('logo' => 'My logo'));
```

**This will output:**

```text
My logo
```