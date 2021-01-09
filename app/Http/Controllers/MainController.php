<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;


class MainController extends Controller
{
    
    public function index()
    {
//        $tovars=Tovar::all();
//$tovars=Tovar::orderBy('name','desc')->get();
//$tovars=Tovar::orderBy('name')->get();
$tovars=Tovar::orderBy('name')->paginate(5);
        return view('hello',compact('tovars'));
   //   return view('layout');
    }


    public function search(Request $request)
    {
        $s=$request->poisk;
       // dd($s);
       $tovars=Tovar::where('name','LIKE',"%$s%")->orderBy('name')->paginate(5);
       return view('hello',compact('tovars'));
    }


}
