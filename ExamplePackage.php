<?php
/**
 * This file is part of the Small Neat Box Framework
 * Copyright (c) 2011-2012 Small Neat Box Ltd.
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace example;

use snb\core\ContainerAware;
use snb\core\PackageInterface;
use snb\core\KernelInterface;

class ExamplePackage extends ContainerAware implements PackageInterface
{
    public function boot(KernelInterface $kernel)
    {
        //$dispatcher = $this->container->get('event-dispatcher');
        //$dispatcher->addListener('kernel.missingresponse', array($this, 'exceptionHandler'));
    }
}
