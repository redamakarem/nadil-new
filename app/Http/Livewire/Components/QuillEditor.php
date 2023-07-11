<?php

namespace App\Http\Livewire\Components;

use App\Models\Legal;
use Livewire\Component;

class QuillEditor extends Component
{
    public $value;
    public $quillId;
    public $legal;
    public $field;

    public function mount(Legal $legal, $field)
    {
        $this->quillId = 'quill' .uniqid();
        $this->legal = $legal;
        $this->field = $field;

    }
    public function updatedValue($value)
    {
        $this->value = $value;
    }
    
    public function render()
    {
        return view('livewire.components.quill-editor');
    }
}
