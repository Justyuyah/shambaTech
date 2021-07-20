<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Article;

class Veo extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:veo');
    }

    public function index()
    {
        $category =  category::orderBy('created_at', 'asc')->get();
        $articles = Article::orderBy('created_at', 'asc')->get();
        return view('veo.home')->with('category', $category)->with('articles', $articles);
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
    public function postArticle(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'category' => 'required|string',
            'details' => 'required|string',
            'postimage' => 'required|image|mimes:png,jpg,gif,svg,jpeg|max:2048',
        ]);
        $imageName = time() . '.' . $request->postimage->extension();
        $request->postimage->move(public_path('images/article'), $imageName);
        $article = new Article;
        $article->title = $request->input('title');
        $article->category = $request->input('category');
        $article->details = $request->input('details');
        $article->postimage = $imageName;
        if ($article->save()) {
            return redirect('/veo/home')->with('success', 'Successful Added Article');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/veo')->with('error', 'You Logged out!');
    }
}
