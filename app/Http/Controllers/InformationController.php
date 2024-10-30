<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index(){
        $details = DB::table('detailinfo')->first();
        $personal = DB::table('personalinfo')->first();
        $objectives = DB::table('objective')->first();
        $education = DB::table('educationinfo')->get();
        return view('welcome', [
            'details' => $details,
            'personal' => $personal,
            'objectives' => $objectives,
            'education' => $education
        ]);
      }
  
}
