

ImageWorks Starter Theme.
===
A base theme for Imageworks based on _s

Features
---------------

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
Note: `.no-sidebar` styles are not automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.
* Webpack build tools.

Getting Started
---------------
1. Download or clone this repo.
2. Install the theme to your local dev server.
3. Change the `proxyTarget: 'http://localsitehere.test'` setting in `./resources/compiler/config.js` to your dev site url.
4. Install required modules with `yarn`.
5. `yarn start` to launch live reload mode.
6. `yarn build` to build theme for production.  (**`./assets` folder will be overwritten!**)

Good luck!
