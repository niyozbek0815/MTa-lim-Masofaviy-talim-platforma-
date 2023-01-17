<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Langs;
use App\Models\Group;
use App\Models\Group_en;
use App\Models\Group_ru;
use App\Models\Group_uz;
use App\Models\Kafedra;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = app()->getLocale('lang');
        $data = DB::table('group_' . $lang . 's')->where('is_deleted','=','0')
            ->leftjoin(
                'kafedra_' . $lang . 's', 'kafedra_' . $lang . 's.id',
                '=', 'group_' . $lang . 's.caf_id'
            )
            ->leftjoin(
                'group_level_' . $lang . 's', 'group_level_' . $lang . 's.id',
                '=', 'group_' . $lang . 's.level_id'
            )
            ->leftjoin(
                'langs', 'langs.id',
                '=', 'group_' . $lang . 's.lang_id'
            )
            ->select(
                'group_' . $lang . 's.*', 'kafedra_' . $lang . 's.name as kafedra_name',
                'group_' . $lang . 's.*', 'group_level_' . $lang . 's.name as level_name',
                'group_' . $lang . 's.*',  'langs.name as lang_name',

            )
            ->get(  )->toArray();
        return view('admin.group.index', ['datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = app()->getLocale('lang');
        $data = DB::table('kafedra_' . $lang . 's')->get();
        $level = DB::table('group_level_' . $lang . 's')->get();
        $langs = Lang::get();
        return view('admin.group.create', ['kafedra' => $data,'langs'=>$langs,'level'=>$level]);
    }
    public function is_active($id)
    {
        $data = Group_uz::find($id);
        if ($data->is_active == 1) {
            $data->is_active = 0;
        } else {
            $data->is_active = 1;
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
        $data = $request->validate(
            [
                'name_uz' => 'required|max:255',
                'kafedra' => 'required|max:255',
                'name_ru' => 'required|max:255',
                'name_en' => 'required|max:255',
                'course' => 'required',
                'lang'=>"required"
            ]
        );
        $saving_uz = new Group_uz();
        $saving_ru = new Group_ru();
        $saving_en = new Group_en();
        $saving_uz->name = $data['name_uz'];
        $saving_ru->name = $data['name_ru'];
        $saving_en->name = $data['name_en'];
        $saving_uz->level_id = $data['course'];
        $saving_ru->level_id = $data['course'];
        $saving_en->level_id = $data['course'];
        $saving_uz->caf_id = $data['kafedra'];
        $saving_en->caf_id = $data['kafedra'];
        $saving_ru->caf_id = $data['kafedra'];
        $saving_ru->lang_id = $data['lang'];
        $saving_en->lang_id = $data['lang'];
        $saving_uz->lang_id = $data['lang'];
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
        return redirect('admin/group')->with(['success' => 'ALL_SUCCESSFUL_SAVED']);
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
        $lang = app()->getLocale('lang');
        $kafedra = DB::table('kafedra_' . $lang . 's')->get();
        $level = DB::table('group_level_' . $lang . 's')->get();
        $langs = Lang::get();
        $data_uz = Group_uz::find($id);
        $data_en = Group_en::find($id);
        $data_ru = Group_ru::find($id);
        return view('admin.group.edit', ['level'=>$level,'langs'=>$langs,'data_uz' => $data_uz, 'data_ru' => $data_ru, 'data_en' => $data_en, 'kafedra' => $kafedra]);
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
                'name_uz' => 'required|max:255',
                'name_ru' => 'required|max:255',
                'name_en' => 'required|max:255',
                'kafedra' => 'required',
                'course' => 'required',
                'lang'=>"required"
            ]
        );
        $saving_uz = Group_uz::find($id);
        $saving_ru = Group_ru::find($id);
        $saving_en = Group_en::find($id);
        $saving_uz->name = $data['name_uz'];
        $saving_ru->name = $data['name_ru'];
        $saving_en->name = $data['name_en'];
        $saving_uz->level_id = $data['course'];
        $saving_uz->caf_id = $data['kafedra'];
        $saving_ru->level_id = $data['course'];
        $saving_ru->caf_id = $data['kafedra'];
        $saving_en->level_id = $data['course'];
        $saving_en->caf_id = $data['kafedra'];
        $saving_uz->lang_id = $data['lang'];
        $saving_ru->lang_id = $data['lang'];
        $saving_en->lang_id = $data['lang'];
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
        $saving_ru->save();
        $saving_en->save();
        return redirect('admin/group')->with(['success' => 'ALL_SUCCESSFUL_SAVED']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_uz = Group_uz::find($id);
        $data_ru = Group_ru::find($id);
        $data_en = Group_en::find($id);
        $data_en->is_deleted=1;
        $data_ru->is_deleted=1;
        $data_uz->is_deleted=1;
        $data_en->save();
        $data_ru->save();
        $data_uz->save();
        return redirect()->back()->withErrors(['success' => 'ALL_SUCCESSFUL_DELETED']);

    }

}
