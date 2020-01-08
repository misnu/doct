<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {

    return view('adm/dashboard');

    }

    public function accsess(){

        $data = DB::table('access_logs')->select(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y") as x'), DB::raw('COUNT(*) as title'))->where(DB::raw('YEAR(created_at)') ,'=', DB::raw('YEAR(NOW())'))->groupBy(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y")'))->having(DB::raw('COUNT(*)'),'>','0')->orderBy(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y")'),'asc')->get();
        return json_encode($data);
    }
}
 