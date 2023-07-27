<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    function show(){
            $data=User::all();
            return view('listCRUD',['users'=>$data]);
    }
}





