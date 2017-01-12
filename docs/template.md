# Template, blueprint & controller

## Template & blueprint

The filename need to be `template.php` in order for it to work.

**Inside `site/bricks/about/`:**

```text
template.php
```

## Blueprint

The filename need to be `blueprint.yml` in order for it to work.

**Inside `site/bricks/about/`:**

```text
blueprint.yml
``` 

## Controller

A template controller is a great way to separate logic from presentation. To make a template controller work, it also need a `template.php` file.

**Inside `site/bricks/about/`:**

```text
controller.php
template.php
```

Read more on Kirby docs on [how to use controllers](https://getkirby.com/docs/developer-guide/advanced/controllers).

## All together

**Inside `site/bricks/about/`:**

```text
blueprint.yml
controller.php
template.php
```