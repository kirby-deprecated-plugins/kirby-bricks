# Options

### `plugin.bricks.register`

As default it will try to register all file types below, but you can choose to only allow some of them:

```php
c::set('plugin.bricks.register', array(
  'blueprint',
  'controller',
  'load',
  'module',
  'snippet',
  'template'
));
```

### `plugin.bricks.remove.prefix`

Maybe you want to prefix a brick folder name like this:

```text
bricks/snippet-header/snippet.php
```

Then your call would be:

```php
snippet('snippet-header');
```

Instead you may want to call it like this:

```php
snippet('header');
```

To remove the `snippet-` folder prefix from the call, you can use this option:

```php
c::get('plugin.bricks.remove.prefix', 'snippet-');
```

If you want to remove more than one prefix you can use an array instead like this:

```php
c::get('plugin.bricks.remove.prefix', ['snippet-', 'template-']);
```

### `plugin.bricks.assets`

Disable assets like `https://example.com/assets/bricks/about/image.svg` by setting this option to false: 

```php
c::set('plugin.bricks.assets', true);
```