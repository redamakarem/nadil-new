<?php

namespace App\Http\Livewire\Admin\Tables;

use Livewire\Component;
use App\Models\Restaurant;

class Index extends Component
{
    public Restaurant $restaurant;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }
    public function render()
    {
        return view('livewire.admin.tables.index');
    }
}
