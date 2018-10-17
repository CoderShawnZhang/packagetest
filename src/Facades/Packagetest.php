<?php

namespace Shawnzhang\Packagetest\Facades;

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/10/17
 * Time: 下午5:04
 */

class Packagetest extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'packagetest';
    }
}