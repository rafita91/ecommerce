<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCar extends Model
{
    //
    protected $fillable = ["status"];
    
    public function productsSize(){
        return $this->id;
    }
    
    public static function findOrCreateBySessionID($shopping_car_id){
        if($shopping_car_id){
            //Buscar el carrito de compras con éste ID
            return ShoppingCar::findBySession($shopping_car_id);
        }else{
            //Crear un carrito de compras
            return ShoppingCar::createWithoutSession();
        }
    }
    
    public static function findBySession($shopping_car_id){
        return ShoppingCar::find($shopping_car_id);
    }
    
    public static function createWithoutSession(){
        return ShoppingCar::create(['status' => 'incompleted']);
    }
    
}
