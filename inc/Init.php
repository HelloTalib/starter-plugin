<?php
/**
 * @package Starter-plugin
 */

namespace Inc;

final class Init {
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }


    /**
     * Loop through the classes , initialze , all call the register method
     * @return
     */
    public static function register_services()
    {
        foreach(self::get_services() as $class){
            $services = self::instantiate($class);
            if(method_exists($services, 'register')){
                $services->register();
            }
        }
    }
    /**
     * Initilize the class
     */
    private static function instantiate($class)
    {
        $services = new $class();
        return $services;
    }
}
