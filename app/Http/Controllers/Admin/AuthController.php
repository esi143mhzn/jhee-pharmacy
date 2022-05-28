<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    private $_notifyMessage = null;
    private $_notifyType = 'info';

    public function login() {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request) {
        // dd($request->all());
        if(!Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password, 
        ], $request->remember_token))
        {
            $this->_notifyMessage = "Login Failed";
            $this->_notifyType = 'danger';

            return redirect()->back()->with([
            	'notify_message' => $this->_notifyMessage,
            	'notify_type' => $this->_notifyType
            ])->withInput($request->all());
		}

        $this->_notifyMessage = "Login Successful.";
        return redirect()->route('admin.dashboard.index')->with([
        	'notify_message' => $this->_notifyMessage,
        	'notify_type' => $this->_notifyType
        ]);
    }

    public function logout() {
        try {
            Auth::logout();
            $this->_notifyMessage = "Logged Out";
        } catch (Exception $e) {
            $this->_notifyMessage = "Logout Failed. Please Try Again.";
            $this->_notifyType = "danger";
        }

		return redirect()->route('admin.auth.login');

    }
}
