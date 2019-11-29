<?php
namespace AndikaMC\LS3System;

use Route;
use Config;
use View;

class LS3Core
{
    public static function Routes()
    {
        /**
         * Manual __construct
         */
        self::modifyEnvironment();

        /**
         * Validate system installed
         */
        if (!self::isInstalled())
        {
            Route::get("system/installer", "\AndikaMC\LS3System\LS3Application\System\Installer@index");
        }
    }

    /**
     * 
     */
    private static function isInstalled()
    {
        return file_exists(config_path("ls3.php"));
    }

    /**
     * Change default environment laravel
     */
    private static function modifyEnvironment()
    {
        View::getFinder()->setPaths([__DIR__.DIRECTORY_SEPARATOR."LS3Resource".DIRECTORY_SEPARATOR."Views"]);
    }
}