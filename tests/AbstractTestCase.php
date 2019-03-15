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

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vinkla\Shield\ShieldServiceProvider;

/**
 * This is the abstract test class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ShieldServiceProvider::class;
    }
}
