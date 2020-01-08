<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{

    public function index(){

        return view('adm/login');
    }
    

    public function cek(Request $request){

        $where = array('username' => $request->username,
                        'password' => md5($request->password)
                    );
    
        $sql = DB::table('users')->where($where)->first();
     
        if(count($sql) >0){
            $return = '/dashboard';
          
        }else{
            $return = '/login';
        }

         return redirect($return)->with(['warning' => 'Invalid username and password']);

    }

    public function logout(){
        return view('adm/login');
    }
}
