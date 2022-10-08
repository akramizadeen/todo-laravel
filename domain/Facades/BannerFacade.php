<?php

namespace Domain\Facades;

use Domain\Services\BannerService;
use Illuminate\Support\Facades\Facade;

class BannerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BannerService::class;
    }
}
