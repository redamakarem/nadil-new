<?php

namespace App\Http\Livewire\Admin\Tables;

use Livewire\Component;
use App\Models\Restaurant;
use App\Models\DiningTable;
use Illuminate\Support\Collection;

class Create extends Component
{
    public $restaurant_list;
    public $selected_restaurant;
    public $restaurant;
    public Collection $inputs;

    protected $rules = [
        'inputs.*.name' => 'required',
        'inputs.*.capacity' => 'required',
        'inputs.*.restaurant_id' => 'required',
    ];


    protected $messages = [
        'inputs.*.name.required' => 'This name field is required.',
        'inputs.*.capacity.required' => 'This capacity field is required.',
        'inputs.*.restaurant_id.required' => 'This restaurant field is required.',
    ];



    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->restaurant_list = Restaurant::where('id', $restaurant->id)->get();
        $this->fill([
            'inputs' => collect([
                ['name' => '', 'capacity' => 0]
            ]),
        ]);
    }





    public function add()
    {
        $this->inputs->push(['name' => '', 'capacity => 0']);
    }

    public function save()
    {
        $this->validate();
        foreach($this->inputs as $input){
            DiningTable::create([
                'restaurant_id' => $input['restaurant_id'],
                'name' => $input['name'],
                'capacity' => $input['capacity'],
            ]);
        }

        $this->resetFields();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Cuisine created Successfully!!"
        ]);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function resetFields()
    {
        $this->fill([
            'inputs' => collect([
                ['name' => '', 'capacity' => 0]
            ]),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.tables.create');
    }
}
