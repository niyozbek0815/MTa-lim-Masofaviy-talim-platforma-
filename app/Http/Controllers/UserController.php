<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = app()->getLocale('lang');
        $data = DB::table('users')->where('is_deleted','=','0')
            ->leftjoin(
                'group_' . $lang . 's', 'group_' . $lang . 's.id',
                '=', 'users.group_id'
            )
            ->select(
                'users.*', 'group_' . $lang . 's.name as group_name')
                ->where('users.roll_id', '=', 1)
            ->get( )->toArray();

        return view("admin.user.index",['datas'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang= app()->getLocale('lang');
        $group=DB::table('group_' . $lang . 's')->get();
        return view('admin.user.create',['group'=>$group]);
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
        $update=new User;
        $data = $request->validate([
            'login' => 'required',
            'group_id' => 'required',
            'roll_id'=>'required',
            'password' => ['required', 'string', 'min:5', 'confirmed'],]);

        $update->login=$data['login'];
        $update->password=Hash::make($data['password']);
        $update->parol=$data['password'];
        $update->group_id=$data['group_id'];
        $update->roll_id=$data['roll_id'];
        $update->save();
        return redirect('/admin/user')->with(['success'=>'ALL_SUCCESSFULL_SAVED']);
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
        $group=DB::table('group_'.$lang.'s')->get();
        $data=User::find($id);
        return view('admin.user.edit',['data'=>$data,'group'=>$group]);

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
        return redirect('/admin/user')->with(['success'=>'ALL_SUCCESSFULL_SAVED']);
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
