![](docs/logo.png)

*[Download the OLD version 0.1](https://github.com/jenstornell/kirby-bricks/tree/Version-0.1)*

**Version:** 2.0

Bricks was created to bundle things together in a modular approach, similar to the [Patterns plugin](https://github.com/getkirby-plugins/patterns-plugin). The result is less folder jumping, because everything releated to the current brick is in the same folder.

It also have features like [snippet controller](docs/snippet-controller.md), [autoload](docs/load.md) and [Module](docs/module.md) plugin support.

### Example 1 - Brick including a [template](docs/template.md)

`site/bricks/about/`:

```text
blueprint.yml
controller.php
load.php
template.php
```

### Example 2 - Brick including a [snippet](docs/snippet.md)

`site/bricks/header/`:

```text
controller.php
load.php
snippet.php
```

### 6. Load custom files

With every brick a root file will be loaded if it exists. From that file you can include additional files that is not encounted for.

From within that file you can include or register set whatever you want.

## Table of Contents

**Install**

1. [Install](docs/install.md)

**Usage**

- [Template, blueprint & controller](docs/template.md)
- [Snippet](docs/snippet.md)
- [Snippet controller](docs/snippet-controller.md)
- [Load](docs/load.md)
- [Assets](docs/assets.md)
- [Module](docs/module.md)

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
- [Lukas Bestle](https://github.com/seehat) - For creating the [Patterns](https://github.com/bastianallgeier) plugin which was an inspiration source for Bricks.