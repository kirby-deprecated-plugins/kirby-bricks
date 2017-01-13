![Kirby Bricks](docs/logo.png)

*[Download the OLD version 0.1](https://github.com/jenstornell/kirby-bricks/tree/Version-0.1)*

**Version:** 2.0

Bricks was created to bundle things together in a modular approach, similar to the [Patterns plugin](https://github.com/getkirby-plugins/patterns-plugin). The result is less folder jumping, because everything releated to the current brick is in the same folder.

It also have features like [snippet controller](docs/snippet-controller.md), [autoload](docs/load.md) and [Module](docs/module.md) plugin support.

### Brick with a [template](docs/template.md)

Example of `site/bricks/about/`:

```text
blueprint.yml
controller.php
image.svg
load.php
script.js
style.scss
template.php
```

### Brick with a [snippet](docs/snippet.md)

Example of `site/bricks/header/`:

```text
controller.php
image.svg
load.php
script.js
style.scss
snippet.php
```

## Table of Contents

**Install**

1. [Install](docs/install.md)
1. Usage
  1. [Template Blueprint Controller](docs/template.md)
  1. [Snippet](docs/snippet.md)
  1. [Snippet controller](docs/snippet-controller.md)
  1. [Load](docs/load.md)
  1. [Assets](docs/assets.md)
  1. [Module](docs/module.md)

**Optional**

- [Options](docs/options.md)

**Other stuff**

- [Troubleshooting](docs/troubleshooting.md)
- [Changelog](docs/changelog.md)
- [License - MIT](docs/license.md)
- [Disclaimer](docs/disclaimer.md)

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4+

## Credits

- [Jens Törnell](https://github.com/jenstornell)
- [Christian Zehetner](https://github.com/seehat) - For providing an asset route solution.
- [Lukas Bestle](https://github.com/seehat) - For creating the [Module](https://github.com/getkirby-plugins/modules-plugin) plugin with support for register a module.
- [Bastian Allgeier](https://github.com/bastianallgeier) - For creating the [Patterns](https://github.com/getkirby-plugins/patterns-plugin) plugin which was an inspiration source for Bricks.