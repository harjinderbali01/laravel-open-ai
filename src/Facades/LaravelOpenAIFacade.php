<?php

namespace HarjinderBali\LaravelOpenAi\Facades;

use \Illuminate\Support\Facades\Facade;

class OpenAiFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'OpenAi';
    }

}
