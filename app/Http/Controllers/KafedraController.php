<?php

namespace App\Http\Controllers;

use App\Models\Kafedra;
use App\Models\Kafedra_en;
use App\Models\Kafedra_ru;
use App\Models\Kafedra_uz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class KafedraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = app()->getLocale('lang');
        $data = DB::table('kafedra_'.$lang.'s')_>where('is_deleted','=','0')->get();
        return view('admin.kafedra.index', ['datas' => $data]);
    }

    public function is_active($id)
    {
        $data_uz = Kafedra_uz::find($id);
        $data_ru = Kafedra_ru::find($id);
        $data_en = Kafedra_en::find($id);
        if ($data_uz->is_active == 1) {
            $data_uz->is_active = 0;
            $data_en->is_active = 0;
            $data_ru->is_active = 0;
        } else {
            $data_uz->is_active = 1;
            $data_ru->is_active = 1;
            $data_ru->is_active = 1;
        }
        $data_uz->save();
        $data_en->save();
        $data_ru->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kafedra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate(
            [
                'name_ru' => 'required|max:255',
                'name_uz' => 'required|max:255',
                'name_en' => 'required|max:255',
            ]
        );
        $saving_uz = new Kafedra_uz();
        $saving_ru = new Kafedra_ru();
        $saving_en = new Kafedra_en();
        $saving_uz->name = $data['name_uz'];
        $saving_ru->name = $data['name_ru'];
        $saving_en->name = $data['name_en'];

        if ($request['activ'] == 'on') {
            $saving_uz->is_active = 1;
            $saving_ru->is_active = 1;
            $saving_en->is_active = 1;

        } else {
            $saving_uz->is_active = 0;
            $saving_ru->is_active = 0;
            $saving_en->is_active = 0;
        }
        $saving_uz->save();
        $saving_en->save();
        $saving_ru->save();
        return redirect('admin/kafedra')->with(['success' => 'ALL_SUCCESSFUL_SAVED']);
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
        $data_uz = Kafedra_uz::find($id);
        $data_ru= Kafedra_ru::find($id);
        $data_en=Kafedra_en::find($id);
        return view('admin.kafedra.edit', ['data_uz' => $data_uz,'data_ru' => $data_ru,'data_en' => $data_en]);
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
        $data = $request->validate(
            [
                'name_ru' => 'required|max:255',
                'name_uz' => 'required|max:255',
                'name_en' => 'required|max:255',
            ]
        );
        $update_uz = Kafedra_uz::find($id);
        $update_ru=Kafedra_ru::find($id);
        $update_en=Kafedra_en::find($id);
        if ($request['activ'] == 'on') {
            $update_uz->is_active = 1;
            $update_ru->is_active = 1;
            $update_en->is_active = 1;

        } else {
            $update_uz->is_active = 0;
            $update_ru->is_active = 0;
            $update_en->is_active = 0;
        }
        $update_uz->save();
        $update_en->save();
        $update_ru->save();
        return redirect('/admin/kafedra')->with('admin/kafedra')->with(['success' => 'ALL_SUCCESSFUL_UPDATED']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_uz = Kafedra_uz::find($id);
        $data_en = Kafedra_en::find($id);
        $data_ru = Kafedra_ru::find($id);
        $data_uz->is_deleted=1;
        $data_en->is_deleted=1;
        $data_ru->is_deleted=1;
        $data_en->save();
        $data_ru->save();
        $data_uz->save();
        return redirect()->back()->with(['success' => 'ALL_SUCCESSFUL_DELETED']);
    }
}
