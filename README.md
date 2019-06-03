
### Introduction

This is a fork from the original bundle created by ambta which can be found here:
[ambta/DoctrineEncryptBundle](https://github.com/ambta/DoctrineEncryptBundle)

This bundle has updated security by not rolling it's own encryption and using verified standardized library's from the field.

### Using [Halite](https://github.com/paragonie/halite)

To use Halite (much faster, but uses php-extension sodium, and libsodium)

`composer require "ext-sodium >=7.2" "paragonie/halite >=4.3" "paragonie/sodium_compat >=1.5"`

```yml
// Config.yml
doctrine_encrypt:
    encryptor_class: Halite
```

### Using [Defuse](https://github.com/defuse/php-encryption)

To use Defuse, you will only need the package.

`composer require "defuse/php-encryption ^2.0"`

```yml
// Config.yml
doctrine_encrypt:
    encryptor_class: Defuse
```

### Annotation

Add the `@Encrypted` annotation on entities you wish to encrypt. 

Currently this package only supports strings and blobs. Encrypted strings will take more space than their un-encrypted counterparts, so if you limit their length, you may want to consider increasing the length by around 4x (with a minimum of around 250 characters for even very short strings). 

***For example***

```
/**
 * @ORM\Column(type="string", length=250)
 */
 ``` 
 
 changes to 
 
 ```
 /**
  * @Encrypted
  * @ORM\Column(type="string", length=1000)
  */
```

[See Usage](Resources/doc/usage.md)

### Secret key

Secret key is generated if there is no key found. This is automatically generated and stored in the folder defined in the configuration

```yml
// Config.yml
doctrine_encrypt:
    secret_directory_path: '%kernel.project_dir%'   # Default value
```

Filename example: `.DefuseEncryptor.key` or `.HaliteEncryptor.key`

If you lose this key, you've lost access to the data. So you may want to back it up securely. 

**Do not forget to add these files to your .gitignore file, you do not want this on your repository!**

### Documentation

* [Installation](Resources/doc/installation.md)
* [Requirements](Resources/doc/installation.md#requirements)
* [Configuration](Resources/doc/configuration.md)
* [Usage](Resources/doc/usage.md)
* [Console commands](Resources/doc/commands.md)
