<?php

namespace App\Http\Livewire\RestaurantAdmin\Table;

use App\Models\DiningTable;
use App\Models\Restaurant;
use Livewire\Component;

class Index extends Component
{

    public  $tables_list;

    public function mount()
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $this->tables_list = DiningTable::whereIn('restaurant_id',auth()->user()->restaurants->pluck('id')->toArray())->get();
        }
        else{
            
            $this->tables_list = DiningTable::where('restaurant_id',auth()->user()->workplace->id)->get();
        }
    }

    public function render()
    {
        return view('livewire.restaurant-admin.table.index');
    }
}
