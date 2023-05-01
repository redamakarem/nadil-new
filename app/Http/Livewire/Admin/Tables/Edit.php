<?php

namespace App\Http\Livewire\Admin\Tables;

use Livewire\Component;
use App\Models\DiningTable;

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

    public function submit()
    {
        $this->validate();
        $this->diningTable->save();
        return redirect()->route('admin.restaurant.tables.index',$this->diningTable->restaurant);
    }

    public function render()
    {
        return view('livewire.admin.tables.edit');
    }
}
