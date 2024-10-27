<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function confirm(Request $request)
    {
        $cake = $request->only(['name','email','tel','number']);
        return view('confirm',compact('cake'));
    }
    public function store(Request $request )
    {
        $cake = $request->only(['name','email','tel','number']);
        Cake::create($cake);
        return view ('thanks');
        
    }
}
