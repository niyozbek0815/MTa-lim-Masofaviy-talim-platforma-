<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use Illuminate\Http\Request;

class LangConrtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Lang::where('is_deleted','=','0')->get();
        return view('admin.language.index', ['langs' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.language.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Lang();
    $req=$request->validate([
        'name'=>"required"
    ]);
        $data->name = $req['name'];
        $data->save();
        return redirect('/admin/lang')->with(['success'=>"ALL_SUCCESSFUL_CREATED"]);
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
        $data = Lang::find($id);
        return view('admin.language.edit', ['data' => $data]);

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
        $data = Lang::find($id);
        $req = $request->validate([
            'name' => 'required'
        ]);
        $data->name = $req['name'];
        $data->save();
        return redirect('/admin/lang')->with(['success'=>"ALL_SUCCESSFUL_EDIT"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Lang::find($id);
        $data->is_deleted=1;
         $data->save();
        return redirect()->back()->with(['success'=>"ALL_SUCCESSFUL_DELETED"]);
    }
}
