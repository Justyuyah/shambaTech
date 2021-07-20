<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Veo as ModelsVeo;
use App\Models\Farmer as ModelFarmer;
use App\Models\Admin as ModelAdmin;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.home');
    }
    public function veo()
    {
        $veo = ModelsVeo::orderBy('created_at', 'asc')->get();
        return view('admin.veo')->with('veo', $veo);
    }
    public function veoView(Request $request, $id)
    {
        $veo = ModelsVeo::find($id)->first();
        return view('admin.viewVeo')->with('veo', $veo);
    }

    public function activateVeo(Request $request, $id)
    {
        $veo = ModelsVeo::find($id)->first();
        $veo->is_veo = 1;
        $veo->save();
        return redirect('/admin/veo')->with('success', 'Veo Activated Successful');
    }
    public function deactivateVeo(Request $request, $id)
    {
        $veo = ModelsVeo::find($id)->first();
        $veo->is_veo = 0;
        $veo->save();
        return redirect('/admin/veo')->with('error', 'Veo Deactivated');
    }
    public function farmer()
    {
        $farmer = ModelFarmer::orderBy('created_at', 'asc')->get();
        return view('admin.farmer')->with('farmer', $farmer);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('error', 'You Logged out!');
    }
}
