<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class Farmer extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:farmer');
    }

    public function index()
    {
        $article = Article::orderBy('created_at', 'desc')->get();
        return view('farmer.home')->with('article', $article);
    }

    public function farmerProfile()
    {
        $category =  category::orderBy('created_at', 'asc')->get();
        return view('farmer.profile')->with('category', $category);
    }

    public function editFarmerProfile(Request $request, $id)
    {
        $farmer = \App\Models\Farmer::find($id)->first();
        if ($farmer !== NULL) {
            $this->validate($request, [
                'firstName' => 'string',
                'lastName' => 'string',
                'ward' => 'string',
                'village' => 'string',
                'district' => 'string'
            ]);
            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
            $farmer->ward = $request->input('ward');
            $farmer->region = $request->input('region');
            $farmer->village = $request->input('village');
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
    public function articleView($id)
    {
        $article = Article::find($id);
        $comments = Comment::find($id);
        $totalComment = Comment::where('commentable_id', '=', $id)->count();
        return view('farmer.articleView')->with('article', $article)->with('comments', $comments)->with('totalComment', $totalComment);
    }
    public function viewProfile()
    {
        return view('farmer.viewProfile');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('error', 'You Logged out!');
    }
}
