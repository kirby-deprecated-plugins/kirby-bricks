# Assets

Maybe you have other files like css, javascripts and images.

**It can look like this:**

Inside `site/bricks/about`:

```text
image.svg
script.js
snippet.php
style.scss
```

- The `snippet.php` file will be registered as a snippet.
- The rest of the files will not be used by Bricks.

## Css and javascript

### Gulp, Grunt etc

When grouping files together like this, it's nice to have a task for merging files together. The task could for example merge all the styles from all the bricks together and save them as a minified file into `site/assets/css/style.min.css`. The same thing goes for javascript.

- http://gulpjs.com
- http://gruntjs.com

I will not go into how these works. It's quite a big topic.

## Images

Images does not work that well with Gulp or Grunt. The approach taken this time is the same as for plugins.

**You can reach the images with this url:**

```text
https://example.com/assets/bricks/about/image.svg
```

*Special thanks to [Christian Zehetner](https://github.com/seehat) for providing a good asset route solution.*