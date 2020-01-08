<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
use App\Menu;
Use DB;

class ContentController extends Controller
{
    public function index()
    {


        $data = array('content' => DB::table('content')->select('content.id', 'menu.name as name_menu','content.name','content.content_id',DB::raw('DATE_FORMAT(content.create_date,"%d/%m/%Y") as create_date'),'content.create_by','content.content','content.content_id')->leftJoin('menu', 'content.id_menu', 'menu.id')->get(), );
        
    
    return view('adm/content', $data);

    }

    public function form($id = null)
    {
      
        $data =  array(
            'menu' => Menu::all(), 
            'language' => DB::table('language')->where('status','1')->get(),
            'content' => DB::table('content')->where('id',$id)->first(),
        );
    
       return view('adm/content_form',$data);

    }

    public function create(Request $request){

        if($request->language == 1){
            $data= array(
                'content' => $request->editor1, 
                'name' => $request->title, 
                'id_menu' => $request->menu, 
                'create_by' => 'Admin', 
                'create_date' => date("Y-m-d"),
                
            ); 
        }else{
            $data= array(
                'content_id' => $request->editor1, 
                'name_id' => $request->title, 
                'id_menu' => $request->menu, 
                'create_by' => 'Admin', 
                'create_date' => date("Y-m-d"),
            ); 
        }

        if(empty($request->id)){
            DB::table('content')->insert($data);
        }else{
            DB::table('content')->where('id', $request->id)->update($data);
        }

        

        return redirect('/content');
    }

    public function delete(Request $request, $id){
        
        DB::table('content')->where('id', $id)->delete();
        return redirect('/content');
    
    }

    
    public function form_update(Request $request, $id){
        $data = array(
            'menu' => Menu::all(), 
            'data' => DB::table('content')->where('id', $id)->first(), 
            'language' => DB::table('language')->where('status','1')->get(),
        );
     return view('adm/content_update',$data);

    }
    
    public function update(Request $request){
        // echo $request->menu;
        
        if($request->language == 1 ){
            $data= array(
                'content' => $request->editor1, 
                'name' => $request->title, 
                'id_menu' => $request->menu, 
            ); 
        }else{

            $data= array(
                'content_id' => $request->editor1, 
                'name_id' => $request->title, 
                'id_menu' => $request->menu, 
            ); 

        }
       



        DB::table('content')->where('id', $request->id)->update($data);
        return redirect('/content');
    
    }
    
}
