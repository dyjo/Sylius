<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/SyliusKernel.php';

use Symfony\Bundle\FrameworkBundle\HttpCache\HttpCache;

class SyliusCache extends HttpCache
{
}
