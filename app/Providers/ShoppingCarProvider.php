<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ShoppingCar;

class ShoppingCarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer("*", function( $view ){
            $shopping_car_id = \Session::get('shopping_car_id');
        
            $shopping_car = ShoppingCar::findOrCreateBySessionID($shopping_car_id);
        
            \Session::put('shopping_car_id', $shopping_car->id); 
            
            $view->with('shopping_car', $shopping_car);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
