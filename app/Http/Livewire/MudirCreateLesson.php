<?php

namespace App\Http\Livewire;

use App\Models\Cources_tip;
use App\Models\Cource_responce;
use App\Models\Kafedra_en;
use App\Models\User;
use Database\Seeders\Cource_tip;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use PDO;

class MudirCreateLesson extends Component
{
    use WithPagination;
    public $showResponse;
    public $newComment;

    public $tip;
    public $listeners = ['showResponse'];

    public function showResponse($id){
        $this->showResponse =Cource_responce::findOrFail($id) ;
    }


    public function show($id){
    }
    public function remove($responseId){
        dd($this->showResponse);
        $response = Cource_responce::findOrFail($responseId)->toArray();
        $response->status = 1;
        $response->save();
        session()->flash('success', "So'rov rad etildi 👌👌👌");

    }
    public function updatedTip($value)
{
        $this->tip = $value;
}
    public function mount(){

    }

    public function render()
    {
        return view('livewire.mudir-create-lesson',[
            'response'=>Cource_responce::latest()->where("is_deleted",'=',0)->where('status','=',0)->paginate(5),
            'kafedraa'=>DB::table('kafedra_'.app()->getLocale('lang').'s')->get()->toArray(),
            'teachers' => User::where('roll_id', '=', 3)->orWhere('roll_id', '=', 2)->get(),
            'groups'=>DB::table('group_'.app()->getLocale('lang').'s')->get(),
            'cource_tip'=>Cources_tip::get()

        ]);
    }
}
