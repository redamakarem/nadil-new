<?php

namespace App\Http\Livewire\RestaurantAdmin\Reports;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ChartsUsersByGender extends Component
{
    public $result;
    public function mount()
    {
        $this->getUsersByGender();
    }

    public function getUsersByGender()
    {
        $this->result=Profile::select('gender', DB::raw('count(*) as count'))
       ->groupBy('gender')
       ->get()->toArray();
    }
    public function render()
    {
        return view('livewire.restaurant-admin.reports.charts-users-by-gender');
    }
}
