PuMuKIT Stats UI
================

Bundle based on [Symfony](http://symfony.com/) to work with the [PuMuKIT Video Platform](https://github.com/pumukit/PuMuKIT/#readme).

![Stats](Resources/data/screenshot.png)


Installation
------------

Steps 1 and 2 requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.


### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require teltek/pumukit-stats-ui-bundle dev_master
```

### Step 2: Update assets

```bash
$ php app/console cache:clear
$ php app/console cache:clear --env=prod
$ php app/console assets:install
```
