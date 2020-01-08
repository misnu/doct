<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Menu;
use App\Content;

class DefaultController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index($url = null , $lang = null)
    {

        $data = array(
            'menu' => Menu::all(), 
            'content' => DB::table('content')->select('content.id', 'menu.name as name_menu','content.name','content.name_id', 'content.content_id',DB::raw('DATE_FORMAT(content.create_date,"%d/%m/%Y") as create_date'),'content.create_by','content.content','content.content_id')->leftJoin('menu', 'content.id_menu', 'menu.id')->where('id_menu',1)->get(), 
            'language' => DB::table('language')->where('status', 1)->get(), 
            'sub_menu' => DB::table('menu')->where('id', 1)->first(), 
            
        );
 
        // print_r($data['content']);  exit;
        return view('home', $data);

    }

    public function read_menu($url = null , $lang = null)
    {

        $data = array(
            'menu' => Menu::all(), 
            'content' => DB::table('content')->select('content.id', 'menu.name as name_menu','content.name','content.name_id','content.content_id',DB::raw('DATE_FORMAT(content.create_date,"%d/%m/%Y") as create_date'),'content.create_by','content.content','content.content_id')->leftJoin('menu', 'content.id_menu', 'menu.id')->where('menu.name',$url)->get(),  
            'language' => DB::table('language')->where('status', 1)->get(), 
            'sub_menu' => DB::table('menu')->where('name', $url)->first(), 
        );
        return view('home', $data);

    }



    public function switch($language = '')
    {

        request()->session()->put('locale', $language);
        return redirect()->back();

    }

    public function content()
    {

        $data = array(
            'menu' => Menu::all(), 
            'content' => Content::all(), 
            'language' => DB::table('language')->where('status', 1)->get(), 
        );
        return view('home', $data);

    }


    
    
}
