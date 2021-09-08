<?php

namespace GetThingsDone\Gateway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Gateway\Gateway
 */
class GatewayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
