<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
     {       
             $data['header_title'] = 'Dashboard'; //for header title

             if(Auth::user()->user_type ==1)
             {
                return view('admin.dashboard',$data);
             }
             else if(Auth::user()->user_type ==2)
             {
                return view('student.dashboard',$data);
             }
             
    }
    
}
