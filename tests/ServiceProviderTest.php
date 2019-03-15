<?php

/*
 * This file is part of Laravel Shield.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vinkla\Tests\Shield;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Vinkla\Shield\Shield;
use Vinkla\Shield\ShieldMiddleware;

/**
 * This is the service provider test class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testShieldIsInjectable()
    {
        $this->assertIsInjectable(Shield::class);
    }

    public function testShieldMiddlewareIsInjectable()
    {
        $this->assertIsInjectable(ShieldMiddleware::class);
    }
}
