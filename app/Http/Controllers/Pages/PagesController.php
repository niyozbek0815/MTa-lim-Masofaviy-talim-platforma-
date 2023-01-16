<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
    public function s_profil(){
        return view('pages.student-profil');
    }
    public function m_profil(){
        return view('pages.mudir-profil');
    }
    public function t_profil(){
        return view('pages.teacher-profil');
    }

    public function c_single(){
        return view('pages.cource-single');
    }
    public function profil(){
        if (Auth::user()->roll_id==2){
            return redirect('teacher/teacher-profil');
        }elseif(Auth::user()->roll_id==3){
            return redirect('mudir/mudir-profil');
        }
        else{
            return redirect("/student-profil");
        }
        return view('pages.sign-in');
    }
    public function p_edit(){
        session()->put('url', url()->previous());

        return view('pages.profil-edit');
    }
    public function p_save(Request $request){

        $data2 = User::findOrFail($request['id']);

        $data = $request->validate([
            'name' => "required",
            'lname' => 'required',
            'email'=>'required|email',
            'login'=>"required|min:5",
            'phone' => "required",
        ]);
        $data2['name'] = $data['name'];
        $data2['l_name'] = $data['lname'];
        $data2['phone'] = $data['phone'];
        if($request['email']!=$data2['email']){
            $data = $request->validate([
                'email'=>'unique:users,email'
            ]);
            $data2['email'] = $data['email'];
        }
        if($request['login']!=$data2['login']){
            $data = $request->validate([
                'login'=>'unique:users,login'
            ]);
            $data2['login'] = $data['login'];
        }
        if($request['password']!=null || $request['password_confirmation']!=null){
            $data = $request->validate([
                'password' => 'required|confirmed|min:6'
            ]);
            $data2['password'] = Hash::make($data['password']);
            $data2['parol'] = $data['password'];
        }
        if ($request->has("file")) {
            $data = $request->validate([
                'file' => 'image|max:2024|mimes:jpeg,png,jpg,gif'
            ]);
            $filemodel = $request->file('file');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('/public/user/', $fileNameToStory);
            if(\File::exists(public_path('/storage/user/'.$data2['image']))){
                \File::delete(public_path('/storage/user/'.$data2['image']));
              }else{
                dd('File not found');
              }
            $data2->image = $fileNameToStory;
        }
        $data2->save();
        $url=session()->get('url');
        session()->forget('url');
        return redirect($url);
    }
    public function reset_pass(){
        return view('pages.reset-password');
    }
    public function s_cource(){
        return view('pages.search-cources');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
