<?php

namespace Atiladanvi\S3Url;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Atiladanvi\S3Url\Skeleton\SkeletonClass
 */
class S3UrlFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 's3-url';
    }
}
