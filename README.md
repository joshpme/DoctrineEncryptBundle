
### Introduction

This is a fork from the original bundle created by ambta which can be found here:
[ambta/DoctrineEncryptBundle](https://github.com/ambta/DoctrineEncryptBundle)

This bundle has updated security by not rolling it's own encryption and using verified standardized library's from the field.

### Using [Halite](https://github.com/paragonie/halite)

*All deps are already installed with this package*

```yml
// Config.yml
doctrine_encrypt:
    encryptor_class: Halite
```

### Using [Defuse](https://github.com/defuse/php-encryption)

*You will need to require Defuse yourself*

`composer require "defuse/php-encryption ^2.0"`

```yml
// Config.yml
doctrine_encrypt:
    encryptor_class: Defuse
```



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
* [Custom encryption class](Resources/doc/custom_encryptor.md)
