# Usage

### Entity

``` php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// importing @Encrypted annotation
use DoctrineEncryptBundle\Configuration\Encrypted;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {

    ..

    /**
     * @Encrypted
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @Encrypted
     * @ORM\Column(type="blob")
     */
    private $profile_picture;
    ..

}
```

***Important***: If you have specified a length for a field, it is important to realise that the encrypted version of the string will be a longer than the original input. So you will need to allow for that.

Calculating the size requirement is pretty complicated, I suggest allowing a minimum of 1000 characters for a 250 or less character string.



This version of the package also allows for the encryption of blobs. 

You cannot encrypt other non-string / non-blob datatypes.

Existing non-encrypted data will work, without any issues. You will need to run a command to encrypt existing data.

Encrypting many fields may cause issues with performance.

## Console commands

Once you have chosen the fields to be encrypted. Run the command ```php bin/console doctrine:encrypt:database``` to encrypt any existing data.

#### [Console commands](https://github.com/joshpme/DoctrineEncryptBundle/blob/master/Resources/doc/commands.md)
