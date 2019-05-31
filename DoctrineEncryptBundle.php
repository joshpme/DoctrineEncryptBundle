<?php

namespace DoctrineEncryptBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;

class DoctrineEncryptBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new DoctrineEncryptExtension();
    }
}
