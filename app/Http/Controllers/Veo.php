<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;

class Veo extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:veo');
    }

    public function index()
    {
        return view('veo.home');
    }

    public function category()
    {
        $category =  category::orderBy('created_at', 'asc')->get();
        return view('veo.category')->with('category', $category);
    }

    public function categoryAdd(Request $request)
    {
        $this->validate($request, [
            'categoryName' => 'required|string'
        ]);
        $category = new category;
        $category->name = $request->input('categoryName');
        $category->save();
        return redirect('/veo/category')->with('success', 'Category Added');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/veo')->with('error', 'You Logged out!');
    }
}
