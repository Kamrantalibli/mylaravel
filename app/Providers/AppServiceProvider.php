<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::directive("auresMethod", function($value = null) {
            $value = str_replace('"', '', $value);
            $value = str_replace("'", '', $value);
            $value = strtoupper($value);
            // dd($value);

            $methods = ["DELETE", "PUT", "PATCH"];
            if(!in_array($value, $methods)) {
                return "";
            } 
            
            $element = '<input type="hidden" name="_method" value="' . $value . '">';
            return $element;
            // dd($value);
        });
    }
}
