# Commands

To make your life a little easier we created some commands that you can use for encrypting and decrypting your current database.

## 1) Get status

You can use the comment `doctrine:encrypt:status` to get the current database and encryption information.

```
$ php bin/console doctrine:encrypt:status
```

This command will return the amount of entities and the amount of properties with the @Encrypted tag for each entity.
The result will look like this:

```
DoctrineEncrypt\Entity\User has 3 properties which are encrypted.
DoctrineEncrypt\Entity\UserDetail has 13 properties which are encrypted.

2 entities found which are containing 16 encrypted properties.
```

## 2) Encrypt current database

You can use the comment `doctrine:encrypt:database [encryptor]` to encrypt the current database.

```
$ php bin/console doctrine:encrypt:database
```



## 3) Decrypt current database

You can use the comment `doctrine:decrypt:database` to decrypt the current database.
