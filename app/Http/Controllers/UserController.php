<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index($email)
    {
        $user=User::where('email','=',$email)->get ();
        if(count($user)>0){
            return response()->json([
                'isset'=>'true'
            ]);
        }else{
            return response()->json([
                'isset'=>'false'
            ]);
        }
    }


    public function prover($email,$pass)
    {
        $user=User::where('email','=',$email)->get ();
        if(count($user)>0){
            if($user[0]['password']==$pass)
            return response()->json([
                'name'=>$user[0]['name']
            ]);
        }
    }


    public function create($email,$name,$pass)
    {
        DB::insert("INSERT INTO users(`name`,`email`,`password`) VALUES(?,?,?)",[
            $name,$email,$pass
        ]);
        return response()->json([
            'userhash'=>$pass,
            'username'=>$name
        ]);
    }
}
