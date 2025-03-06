<?php

namespace libraries;

class Router
{
    private static $prefix='';
    private static $layout='';
    private static $found=false;
    public static function group($prefix, $callback) : void
    {
        $previusPrefix=self::$prefix;
        self::$prefix=trim($previusPrefix . '/' . $prefix, '/');
        $callback();
        self::$prefix=$previusPrefix;
    }




}