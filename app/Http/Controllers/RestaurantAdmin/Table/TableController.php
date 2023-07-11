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
    public function create()
    {
        
        return view('restaurant-admin.dining-tables.create');
    }

    public function edit(Restaurant $restaurant, DiningTable $diningTable)
    {   
        $this->authorize('edit', $diningTable);
        return view('restaurant-admin.dining-tables.edit', compact('diningTable'));
    }
   
}
