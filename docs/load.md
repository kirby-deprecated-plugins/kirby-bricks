# Load

With `load.php` will autoload directly. It can be good for having functions, classes or other additional files that is not encounted for.

`load.php` will always load. It's not template specific and it does not try to be smart.

**Inside `bricks/about/`:**

```text
load.php
```

## Add custom files

**Inside `load.php` you can do things like this:**

```php
include __DIR__ . DS . 'kirbytext-tags.php';
```

**Then you can add a kirbytext tag to the brick.

**Inside `bricks/about/`:**

```text
load.php
kirbytext-tags.php
```