<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
