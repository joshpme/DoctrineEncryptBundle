<?php

namespace DoctrineEncryptBundle\Tests\Unit\Subscribers\fixtures;

use DoctrineEncryptBundle\Configuration\Encrypted;

class ExtendedUser extends User
{
    /**
     * @var string
     * @Encrypted()
     */
    public $extra;

    public function __construct($name, $address = null, $extra = null)
    {
        parent::__construct($name, $address);
        $this->extra = $extra;
    }
}
