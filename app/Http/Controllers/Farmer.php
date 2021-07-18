<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Farmer extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:farmer');
    }

    public function index()
    {
        return view('farmer.home');
    }

    public function farmerProfile()
    {
        return view('farmer.profile');
    }

    public function editFarmerProfile(Request $request, $id)
    {
        $farmer = \App\Models\Farmer::find($id)->first();
        if ($farmer !== NULL) {
            $this->validate($request, [
                'firstName' => 'required|string',
                'lastName' => 'required|string',
            ]);
            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
//            $farmer->userName = $request->input('userName');
//            $farmer->email = $request->input('email');
//            $farmer->mobileNumber = $request->input('mobileNumber');
            if ($farmer->save()) {
                return redirect('/farmer/profile')->with('success', 'Successful Updated Profile');
            } else {
                return back()->withInput()->with('error', 'Failed to Update Try again');
            }
        }
    }

    public function viewProfile()
    {
        return view('farmer.viewProfile');
    }


}
