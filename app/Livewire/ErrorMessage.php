<?php

namespace App\Livewire;

use Livewire\Component;

class ErrorMessage extends Component
{
    public $message;
    public $type;

    public function mount($message, $type = 'error')
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.error-message');
    }
}
