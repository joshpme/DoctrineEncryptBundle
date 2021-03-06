# Installation

1. Download DoctrineEncryptBundle using composer
2. Enable the database encryption bundle
3. Configure the database encryption bundle

### Requirements

 - PHP >=7.2
 - Choose between Halite and Defuse

### Step 1: Download DoctrineEncryptBundle using composer

DoctrineEncryptBundle should be installed using [Composer](http://getcomposer.org/):

``` js
{
    "require": {
        "joshpme/doctrine-encrypt-bundle": "4.0.*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ composer update joshpme/doctrine-encrypt-bundle
```

Composer will install the bundle to your project's `vendor/joshpme` directory.

### Step 2: Enable the bundle

Enable the bundle in the Symfony, add it in your app/AppKernel.php file:

``` php
public function registerBundles()
{
    $bundles = array(
        // ...
        new DoctrineEncryptBundle\DoctrineEncryptBundle(),
    );
}
```

### Step 3: Set your configuration

All configuration value's are optional.
On the following page you can find the configuration information.

#### [Configuration](https://github.com/joshpme/DoctrineEncryptBundle/blob/master/Resources/doc/configuration.md)
