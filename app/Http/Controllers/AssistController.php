<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AssistController extends Controller
{
    //
    public function create()
    {

    	return view('assist/assist');
    }
    public function user()
    {

        return view('assist/user');
    }

    public function store(Request $request)
    {
    	$user =new user;
        $user->name=$request->name;
    	$user->email=$request->email;
        $user->password=$request->password;
    	


    	if($user->save())
    	{
    		echo "inserted successfully";
    	}
    	else
    	{
    		echo "inserted failed";
    	}
    	
    }
     
}
