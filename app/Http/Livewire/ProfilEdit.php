<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilEdit extends Component
{
    use WithFileUploads;
    public $image;
    protected $listeners = ['fileUpload' => "handleFileUpload"];
    public function  handleFileUpload($imageData){
        $this->image=$imageData;
    }
    public function render()
    {
        return view('livewire.profil-edit');
    }
}
