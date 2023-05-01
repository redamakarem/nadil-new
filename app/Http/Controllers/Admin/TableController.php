<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use App\Models\DiningTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function index($restaurant)
    {
        return view('admin.dining-tables.index',compact('restaurant'));
        
    }
    public function create($restaurant)
    {
        $restaurant = Restaurant::findOrFail($restaurant);
        
        return view('restaurant-admin.dining-tables.create',compact('restaurant'));
    }

    public function edit(Restaurant $restaurant, DiningTable $diningTable)
    {
        return view('admin.dining-tables.edit',compact('diningTable'));
    }
    
}
