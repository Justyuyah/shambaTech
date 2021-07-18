<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Farmer;
use App\Models\Admin;
use App\Models\Veo;
use Illuminate\Support\Facades\Auth;
use PDO;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:farmer')->except('logout');
    }
    //ADMIN
    public function admin()
    {
        return view('admin.index');
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|max:255'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('/admin/home');
        } else {
            return back()->withInput()->with('error', 'Invalid Email Address or Password');
        }
    }
    public function adminRegister()
    {
        return view('admin.register');
    }
    public function adminRegisterProcess(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:admins',
            'password' => 'required|string|min:6|max:255|confirmed'
        ]);
        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        if ($admin->save()) {
            return redirect('/admin')->with('success', 'Successful Created Account,login to proceeds.');
        } else {
            return back()->withInput()->with('error', 'Failed Try again');
        }
    }
    // END OF ADMIN

    //vEO
    public function veo()
    {
        return view('veo.index');
    }
    public function veoLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|max:255'
        ]);
        if (Auth::guard('veo')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('/veo/home');
        } else {
            return back()->withInput()->with('error', 'Invalid Email Address or Password');
        }
    }
    public function veoRegister()
    {
        return view('veo.register');
    }
    public function veoRegisterProcess(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'userName' => 'required|string',
            'gender' => 'required|string',
            'mobileNumber' => 'required|string',
            'region' => 'required|string',
            'district' => 'required|string',
            'email' => 'required|string|email|unique:admins',
            'password' => 'required|string|min:6|max:255|confirmed'
        ]);
        $veo = new Veo;
        $veo->firstName = $request->input('firstName');
        $veo->lastName = $request->input('lastName');
        $veo->userName = $request->input('userName');
        $veo->email = $request->input('email');
        $veo->gender = $request->input('gender');
        $veo->district = $request->input('district');
        $veo->region = $request->input('region');
        $veo->mobileNumber = $request->input('mobileNumber');
        $veo->password = Hash::make($request->input('password'));
        if ($veo->save()) {
            return redirect('/veo')->with('success', 'Successful Created Account,login to proceeds.');
        } else {
            return back()->withInput()->with('error', 'Failed Try again');
        }
    }
    //END OF VEO

    //FARMER
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

//END OF FARMER
