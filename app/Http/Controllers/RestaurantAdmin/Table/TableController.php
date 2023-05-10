<?php

namespace App\Http\Controllers\RestaurantAdmin\Table;

use App\Http\Controllers\Controller;
use App\Models\DiningTable;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('restaurant-admin.dining-tables.index');
    }
    public function create($restaurant)
    {
        $restaurant = Restaurant::findOrFail($restaurant);
        
        return view('restaurant-admin.dining-tables.create',compact('restaurant'));
    }

    public function edit(Restaurant $restaurant, DiningTable $diningTable)
    {   
        
        
        if(auth()->user()->hasRole('restaurant-super-admin')){
            if(!auth()->user()->restaurants->contains($diningTable->restaurant_id)){
                abort(403,'Unauthorized');
            }else{
                return view('restaurant-admin.dining-tables.edit',compact('diningTable'));
            }
            

            
        }
        if(auth()->user()->workplace->id??-1==$restaurant->id){
            return view('restaurant-admin.dining-tables.edit',compact('diningTable'));
        }

        abort(403,'Unauthorized');
    }
   
}
