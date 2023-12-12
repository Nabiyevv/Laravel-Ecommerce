<?php

namespace App\Helper;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;


class CacheHelper
{
    private static $cacheTime = [
        'featured_products' => 60 * 60 * 24 * 7, // 7 days
        'products' => 60 * 30, // 30 minutes
        'categories' => 60 * 60 * 24 * 7, // 7 days
        'category_products' => 60 * 60 * 24 * 7,
        'product_detail' => 60 * 10, // 10 minutes
        'product_stock' => 60 * 60 * 24 * 7,
        'product_reviews' => 60 * 30, // 30 minutes
        'product_related' => 60 * 60 * 24 * 7,
        'product_search' => 60 * 60 * 24 * 7,
        'product_filter' => 60 * 10 // 10 minutes
    ];
    

    public static function cacheRemember($name,callable $sqlQuery)
    {
        $time = self::$cacheTime[$name];

        if($time){
            return Cache::remember($name, $time, $sqlQuery);
        }
       
        return Cache::remember('custom',10,$sqlQuery);
    }

    public static function cacheForget($name)
    {
        return Cache::forget($name);
    }

    public static function cacheFlush()
    {
        return Cache::flush();
    }

}