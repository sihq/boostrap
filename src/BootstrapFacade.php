<?php

namespace Sihq\Bootstrap;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sihq\Bootstrap\Skeleton\SkeletonClass
 */
class BootstrapFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bootstrap';
    }
}
