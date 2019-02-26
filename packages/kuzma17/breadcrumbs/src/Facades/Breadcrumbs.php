<?php
/**
 * Created by PhpStorm.
 * User: kuzma
 * Date: 13.02.19
 * Time: 12:50
 */

namespace Kuzma17\Breadcrumbs\Facades;


use Illuminate\Support\Facades\Facade;

class Breadcrumbs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'breadcrumbs';
    }

}