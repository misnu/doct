<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;

class MenuController extends Controller
{

    public function index()
    {

        $data =  array('menu' => DB::table('menu')->get() );
    
    return view('adm/menu', $data);

    }
    // DB::raw('
    public function form($id = null)
    {
        
        $data =  array(
            'language' => DB::table('language')->where('status', 1)->get(),
            'menu' =>  DB::table('menu')->where('sub', null)->get(),
            'data' => DB::table('menu')->where('id', $id)->first(), 
        );
    
        return view('adm/menu_form', $data);

    }


    public function create(Request $request)
    {

        if($request->language == 1){
            $data = array(
                'name' => $request->name,
                'sub' => $request->menu,
                );
        }else{
            $data = array(
                'name_id' => $request->name,
                'sub' => $request->menu,
                );
        }
        
        if(empty($request->id)){
            DB::table('menu')->insert($data);
        }else{
            DB::table('menu')->where('id', $request->id)->update($data);
        }

        
 
    
    return redirect('/menu')->with(['message' => 'Data saved successfully']);



    }

    public function formupdate($id, $lang)
    {

        $data = array(
            'data' => DB::table('menu')->where('id', $id)->first(), 
            'language' => DB::table('language')->where('status', 1)->get(),
            'menu' =>  DB::table('menu')->where('sub', null)->get(),
        );
    // $table = Menu::all();
    
    return view('adm/menu_update',$data);

    }

    public function update(Request $request)
    {

    
        if($request->language == 1){
            $data = array(
                'id' => $request->id,
                'name' => $request->name,
                'sub' => $request->menu
                );
        }else{
            $data = array(
                'id' => $request->id,
                'name_id' => $request->name,
                'sub' => $request->menu
                );
        }
    
        DB::table('menu')->where('id', $request->id)->update($data);

        return redirect('/menu')->with(['message' => 'Data updated successfully']);

    }

    public function delete($id)
    {

        DB::table('menu')->where('id', $id)->delete();
        return redirect('/menu')->with(['message' => 'data successfully deleted']);

    }
}
