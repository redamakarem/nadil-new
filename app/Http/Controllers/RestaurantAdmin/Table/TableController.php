<?php

namespace App\Http\Controllers\RestaurantAdmin\Table;

use App\Http\Controllers\Controller;
use App\Models\DiningTable;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index($restaurant_id)
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $restaurant = auth()->user()->restaurants->contains($restaurant_id)?Restaurant::find($restaurant_id):null;
            return view('restaurant-admin.dining-tables.index',compact('restaurant'));
        }
        $restaurant = Restaurant::findOrFail($restaurant_id);
        if(auth()->user()->workplace->id==$restaurant->id){
            return view('restaurant-admin.dining-tables.index',compact('restaurant'));
        }else{
            abort(403,'Unauthorized');
        }
        
    }
    public function create($restaurant)
    {
        $restaurant = Restaurant::findOrFail($restaurant);
        
        return view('restaurant-admin.dining-tables.create',compact('restaurant'));
    }

    public function edit(Restaurant $restaurant, DiningTable $diningTable)
    {
        
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $diningTable=auth()->user()->restaurants->contains($restaurant->id)?$diningTable:null;

            return view('restaurant-admin.dining-tables.edit',compact('diningTable'));
        }
        if(auth()->user()->workplace->id??-1==$restaurant->id){
            return view('restaurant-admin.dining-tables.edit',compact('diningTable'));
        }

        abort(403,'Unauthorized');
    }
   
}
