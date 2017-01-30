<?php

namespace App\Http\Controllers\NewsPortalController\NewsWriter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use DB;
use Validator;

class RegisterController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getRegisterForm(){

        return view('news-portal.commonlayouts.registration');

    }



    public function postRegisterForm()
    {

/*
        Validator::make($this->request->all(), [
            'name' => 'required',//validating name
            'email' => 'required|unique:users',//setting unique property for email
            'password' => 'required|max:20|min:6',// password cannot be greater than 20 and lesser than 6 characters
        ]);*/

        $this->validate($this->request,[

            'name' => 'required',//validating name
            'email' => 'required|unique:users',//setting unique property for email
            'password' => 'required|max:20|min:6',// password cannot be greater than 20 and lesser than 6 characters
        ]);


            User::create([
                'name' => $this->request->get('name'),
                'email' => $this->request->get('email'),
                'password' => bcrypt($this->request->get('password')),// bcrypt does the hashing / encryption of the password
                'role' => $this->request->get('role'),


            ]);


            return redirect()->back()->with('register_success', 'Thanks for the Registration!!');



    }

}
