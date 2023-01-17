<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Kafedra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
    $lang = app()->getLocale('lang');
    $data = DB::table('users')->where('is_deleted','=','0')
    ->leftjoin(
        'kafedra_' . $lang . 's', 'kafedra_' . $lang . 's.id',
        '=', 'users.kafedra_id'
    )
    ->select(
        'users.*', 'kafedra_' . $lang . 's.name as kafedra_name')
        ->where('users.roll_id', '=', 2)
    ->get( )->toArray();

       return view("admin.teacher.index",['datas'=>$data]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $lang= app()->getLocale('lang');
    $group=DB::table('kafedra_'.$lang.'s')->get();
    return view('admin.teacher.create',['group'=>$group]);
   }
   public function is_active($id){
       $data=User::find($id);
       if($data->is_active==1){
           $data->is_active=0;
       }else{
           $data->is_active=1;
       }
       $data->save();
       return redirect()->back();
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $data=new User();
    $req=$request->validate([
        'kafedra_id' =>'required|integer',
        'roll_id' =>'required',
        'login' => 'required|max:255|unique:users,login',
        'password' => ['required','string', 'min:5', 'confirmed'],
    ]);
    $data->kafedra_id=$req['kafedra_id'];
    $data->login=$req['login'];
    $data->password=Hash::make($req['password']);
    $data->parol=$req['password'];
$data->roll_id=$req['roll_id'];
$data->save();
return redirect('/admin/teacher')->with(['success' =>'ALL_SUCCESSFULL_SAVED']);
    }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
            $lang= app()->getLocale('lang');
        $group=DB::table('kafedra_'.$lang.'s')->get();
       $data=User::find($id);
       return view('admin.teacher.edit',['data'=>$data,'group'=>$group]);

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $update=User::find($id);
       $data = $request->validate([
           'login' => 'required',
           'group' => 'required',
       ]);
       if($request['password']!==null){
          $data=$request->validate([
           'password' => ['required', 'string', 'min:5', 'confirmed'],]);
           $update->password=Hash::make($data['password']);
           $update->parol=$data['password'];
       }

       $update->login=$data['login'];
       $update->group_id=$data['group'];
       $update->save();
       return redirect('/admin/teacher')->with(['success'=>'ALL_SUCCESSFULL_SAVED']);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $data=User::find($id);
       $data->is_deleted=1;
        $data->save();
       return redirect()->back()->with(['success'=>"ALL_SUCCESSFUL_DELETED"]);
   }
}
