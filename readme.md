# Kirby Bricks

*[Download the OLD version 0.1](https://github.com/jenstornell/kirby-bricks/tree/Version-0.1)*

**Version:** 2.0

Bricks was created to bundle things together in a modular approach, similar to the [Patterns plugin](https://github.com/getkirby-plugins/patterns-plugin). The result is less folder jumping, because everything releated to the current brick is in the same folder.

It also have features like [snippet controller](docs/snippet-controller.md), [autoload](docs/load.md) and [Module](docs/module.md) plugin support.

### Brick with a [template](docs/template.md)

Example of `site/bricks/about/`:

```text
blueprint.yml
controller.php
model.php
template.php
```

### Brick with a [snippet](docs/snippet.md)

Example of `site/bricks/header/`:

```text
controller.php
snippet.php
style.scss
```

## Table of Contents

1. [Install](docs/install.md)
1. Usage
  1. [Template Blueprint Controller](docs/template.md)
  1. [Snippet](docs/snippet.md)
  1. [Snippet controller](docs/snippet-controller.md)
  1. [Load](docs/load.md)
  1. [Assets](docs/assets.md)
  1. [Module](docs/module.md)
1. [Options](docs/options.md)
1. [Troubleshooting](docs/troubleshooting.md)
1. [Changelog](docs/changelog.md)
1. [License - MIT](docs/license.md)
1. [Disclaimer](docs/disclaimer.md)

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4+

## Credits

- [Jens Törnell](https://github.com/jenstornell) - Author
- [Christian Zehetner](https://github.com/seehat) - For providing a nice assets route solution.
- [Pedro Borges](https://github.com/pedroborges) and [Sonja Broda](https://github.com/texnixe) for help on improving my namespaces.
- [Lukas Bestle](https://github.com/seehat) - For creating the [Module](https://github.com/getkirby-plugins/modules-plugin) plugin with support for register a module.
- [Bastian Allgeier](https://github.com/bastianallgeier) - For creating the [Patterns](https://github.com/getkirby-plugins/patterns-plugin) plugin which was an inspiration source for Bricks.