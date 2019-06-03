<?php

namespace DoctrineEncryptBundle\Tests\Unit\Subscribers\fixtures;

use DoctrineEncryptBundle\Configuration\Encrypted;

class User
{
    /**
     * @var string
     * @Encrypted()
     */
    public $name;

    /**
     * @var string|null
     * @Encrypted()
     */
    private $address;

    public function __construct($name = null, $address = null)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
}
