# Snippet

## File structure

The filename need to be `snippet.php` in order for it to work.

**Inside `bricks/header/`:**

```text
snippet.php
```

You can also nest snippets.

**Inside `bricks/header/logo/`:**

```text
snippet.php
```

## Call it

Call it like you normally do.

```php
snippet('header');
snippet('header/logo');
```

## Snippet controller

A [snippet controller](docs/snippet-controller.md) is a great way to separate logic from presentation.