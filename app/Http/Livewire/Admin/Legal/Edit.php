<?php

namespace App\Http\Livewire\Admin\Legal;

use App\Models\Legal;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    public Legal $legal;

    public $content_en;
    public $content_ar;

    protected $rules = [
        'legal.title_en' => 'required|string|min:3|max:191',
        'legal.title_ar' => 'required|string|min:3|max:191',
        'content_en' => 'required|string|min:3',
        'content_ar' => 'required|string|min:3',
    ];

    public function mount(Legal $legal)
    {
        $this->legal = $legal;
        $this->content_en = $legal->content_en;
        $this->content_ar = $legal->content_ar;
    }
    public function render()
    {
        return view('livewire.admin.legal.edit');
    }

    public function submit()
    {
        $this->validate();
        $this->legal->content_en = $this->content_en;
        $this->legal->content_ar = $this->content_ar;
        $this->legal->slug = Str::slug($this->legal->title_en, '-');
        $this->legal->save();
    }
}
