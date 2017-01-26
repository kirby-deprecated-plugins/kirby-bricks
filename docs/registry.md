# Extension registry

Maybe you have a plugin or for some reason don't want to use the same `bricks` folder for every brick. In that case you can register your own bricks.

```php
$kirby->set('brick', 'menu', __DIR__ . DS . 'menu');
```

In the example above your folder might be `bricks/menu` and all allowed filetypes in there will be registered automatically.