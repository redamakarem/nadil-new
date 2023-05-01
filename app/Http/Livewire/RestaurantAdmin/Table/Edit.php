<?php

namespace App\Http\Livewire\RestaurantAdmin\Table;

use App\Models\DiningTable;
use Livewire\Component;

class Edit extends Component
{
    public DiningTable $diningTable;
    protected $rules = [
        'diningTable.name' => 'required|string',
        'diningTable.capacity' => 'required|integer',
        'diningTable.is_active' => 'required|boolean',
    ];
    public function mount( DiningTable $diningTable)
    {
        $this->diningTable = $diningTable;
    }
    public function render()
    {
        return view('livewire.restaurant-admin.table.edit');
    }
    public function submit()
    {
        $this->validate();
        $this->diningTable->save();
        return redirect()->route('restaurant-admin.restaurant.tables.index',$this->diningTable->restaurant_id);
    }
}
