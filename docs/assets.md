# Assets

Maybe you want to use unsupported assets like css, javascripts and images.

**Example brick path:** `site/bricks/about/`

```text
image.jpg
script.js
style.scss
```

## Image urls

You can get the images with `assets/bricks/[brick-name]/[file-name]`:

```text
https://example.com/assets/bricks/about/image.jpg
```

*Special thanks to [Christian Zehetner](https://github.com/seehat) for providing a good route for assets.*

### Disable asset access

If you don't want to be able to access the assets like this, it's possible to completely disable it. Set this config to `false`:

```php
c::set('plugin.bricks.assets', true);
```

## Css and javascript

### Gulp, Grunt etc

When having css files in the bricks, it's nice to have a task to merge files together and save it as  `site/assets/css/style.min.css`. The same thing goes for javascript.

I will not go into how it's done. Read more about [Gulp](http://gulpjs.com) and [Grunt](http://gruntjs.com).