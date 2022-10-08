<?php

namespace Domain\Facades;

use Domain\Services\TodoService;
use Illuminate\Support\Facades\Facade;

class TodoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TodoService::class;
    }
}
