<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Farmer;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:farmer')->except('logout');
    }
    public function farmer()
    {
        return view('farmer.index');
    }
    public function farmerLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|max:255'
        ]);
        if (Auth::guard('farmer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('/farmer/home');
        } else {
            return back()->withInput()->with('error', 'Invalid Email Address or Password');
        }
    }
    public function farmerRegister()
    {
        //$data = file_get_contents('assets/tanzania.villages.json');
        return view('farmer.register');
    }
    public function farmerRegisterProcess(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'userName' => 'required|string|unique:farmers',
            'email' => 'required|string|email|unique:farmers',
            'mobileNumber' => 'required|string|unique:farmers|min:10|max:14',
            'password' => 'required|string|min:6|max:255|confirmed'
        ]);
        $farmer = new Farmer;
        $farmer->firstName = $request->input('firstName');
        $farmer->lastName = $request->input('lastName');
        $farmer->userName = $request->input('userName');
        $farmer->email = $request->input('email');
        $farmer->mobileNumber = $request->input('mobileNumber');
        $farmer->password = Hash::make($request->input('password'));
        if ($farmer->save()) {
            return redirect('/farmer')->with('success', 'Successful Created Account,login to proceeds.');
        } else {
            return back()->withInput()->with('error', 'Failed Try again');
        }
    }

    public function farmerLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/farmer')->with('error', 'You Logged out!');
    }
}
