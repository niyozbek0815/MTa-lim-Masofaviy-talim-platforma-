<?php

namespace App\Http\Livewire;

use App\Models\Cource_responce;
use Livewire\Component;
use Livewire\WithPagination;
use PDO;

class MudirCreateLesson extends Component
{
    use WithPagination;
    public $showResponse;
    public $newComment;

    public function show($id){
        $this->showResponse =Cource_responce::findOrFail($id) ;
    }
    public function remove($responseId){
        dd($this->showResponse);
        $response = Cource_responce::findOrFail($responseId);
        $response->status = 1;

        dd($this->showResponse);
        $response->save();
        session()->flash('success', "So'rov rad etildi 👌👌👌");

    }

    public function render()
    {
        return view('livewire.mudir-create-lesson',[

            'response'=>Cource_responce::latest()->where("is_deleted",'=',0)->where('status','=',0)->paginate(1)]);
    }
}
