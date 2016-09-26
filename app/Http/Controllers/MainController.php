<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ShoppingCar;

class MainController extends Controller
{
    public function home(){
        
        $shopping_car_id = \Session::get('shopping_car_id');
        
        $shopping_car = ShoppingCar::findOrCreateBySessionID($shopping_car_id);
        
        \Session::put('shopping_car_id', $shopping_car->id);
        
        return view('main.home', ["shopping_car" => $shopping_car]);
    }
}
