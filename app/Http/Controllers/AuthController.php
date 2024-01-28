<?php

namespace App\Http\Controllers;

use App\Models\SchoolUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Return user to login form if request is GET.
    public function loginView(){
        return back();
    }

    public function login(Request $request){
        // $user = SchoolUser::find($request->username);
        $user = SchoolUser::where('username',$request->username)->first();
        if($user)
            switch($user->role_id){
                case '1':
                    return view('admin-dashboard');
                case '2':
                    return view('teacher-dashboard');
                case '3':
                    return view('student-dashboard');
                default:
                    echo "DEFAULT CASE";
                break;
            }
        else 
            return redirect()->back()->with('msg', 'Invalid Name');
    }
}
