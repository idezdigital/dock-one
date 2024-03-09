<?php

namespace Idez\DockOne;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Idez\DockOne\Skeleton\SkeletonClass
 */
class DockOneFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dock-one';
    }
}
