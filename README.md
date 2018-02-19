# Thematic + Wordpress

## Instructions
This starter theme is based off a blank slate installation of [Sage 9](roots.io/sage), following their [setup instructions](https://roots.io/sage/docs/theme-installation/). Check this documentation for the necessary requirements before you get started.

Unlike the other Thematic themes, this does not rely on the [Thematic](https://github.com/drawcard/thematic) submodule for the framework files. Instead it has a package.json file set up with the necessary packages ready for download.

Before you begin, make sure your development VM is up and running!

1. Clone this repo into your Wordpress theme folder: 
```git clone https://github.com/drawcard/thematic-wp/ your-theme-name && cd your-theme-name```

2. Update the Composer packages
```composer update```

3. Update the NPM packages via Yarn
```yarn && yarn upgrade```

4. Edit the ```publicPath``` & ```devURL``` variables in ```resources/assets/config.json``` with your info:
```json
  "publicPath": "/wp-content/themes/your-theme-name",
  "devUrl": "https://your-development-vm-url.test",
```

5. Edit the Theme CSS header in ```resources/style.css```:
```css
/*
Theme Name:         Thematic + Sage 9
Theme URI:          drawcard.com.au
Description:        Thematic for Wordpress, based on Sage 9.0 + Yarn + SCSS 
Version:            9.0.0
Author:             Thematic
Author URI:         https://github.com/drawcard/thematic-wp/
Text Domain:        sage, thematic

License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/
```

7. Fire up LiveReload
```npm start```

6. Access the development site via LiveReload: http://localhost:3000

## Extras
You may also want to install the following useful plugins to your site.
```bash
wp plugin install --activate \
elementor \
elementor-pro \
fakerpress \
mass-pagesposts-creator \
https://github.com/wp-sync-db/wp-sync-db/archive/master.zip \
https://github.com/wp-sync-db/wp-sync-db-media-files/archive/master.zip \
https://github.com/wp-sync-db/wp-sync-db-multisite-tools/archive/delicious-brains.zip \
https://github.com/wp-sync-db/wp-sync-db-cli/archive/master.zip 
```

And of course get rid of this stuff
```
wp plugin uninstall --deactivate hello
wp theme uninstall twentyfifteen twentysixteen twentyseventeen
```
