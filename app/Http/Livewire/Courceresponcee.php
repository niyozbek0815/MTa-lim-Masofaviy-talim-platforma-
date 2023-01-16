<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cource_responce;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination as LivewireWithPagination;


class Courceresponcee extends Component
{
    use LivewireWithPagination;

    public $lessonName;

    public $lessonContent;
    public function addResponse($user_id){
        $this->validate([
            'lessonName' => "required",
            'lessonContent' => "required"
        ]);
        $create = Cource_responce::create([ 'name' => $this->lessonName, 'content' => $this->lessonContent, 'user_id' => $user_id]);
        $this->lessonName = "";
        $this->lessonContent = "";
        session()->flash('success', "Yangi so'rov qo'shildi 👍👍👍");


    }
    public function remove($responseid){
        $response = Cource_responce::findOrFail($responseid);
        $response->is_deleted = 1;
        $response->save();
        session()->flash('success', "So'rov o'chirildi 👌👌👌");
    }

    public function render()
    {
        return view('livewire.courceresponcee',
        ['response'=>Cource_responce::latest()->where("user_id","=", Auth::user()->id)->where("is_deleted",'=',0)->paginate(6)]);
    }
}
