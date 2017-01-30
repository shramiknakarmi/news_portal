<?php

namespace App\Http\Controllers\NewsPortalController\NewsWriter;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Session;


class LoginController extends Controller
{
    /**
     * @return string
     */
    public function getlogin()
    {
        return view('news-portal.commonlayouts.login');
    }

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function postLogin()
    {
    /*    $role=$this->request->get('role');*/

        Validator::make($this->request->all(), [
            'email' => 'required',//setting gin
            //unique property for email
            'password' => 'required',// password cannot be greater than 20 and lesser than 6 characters
        ]);
        if (Auth::attempt($this->request->only('email', 'password')) ) {

                return redirect()->intended('welcome');



        } else {
            return redirect()->back()->with('error', 'Username or Password incorrect');
        }


    }


    public function doLogout(){

        Auth::logout();

        return redirect('/');

    }
}
