<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Http\Requests\CakeRequest;

class CakeController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function confirm(CakeRequest $request)
    {
        $cake = $request->only(['name','email','tel','number']);
        return view('confirm',compact('cake'));
    }
    public function store(CakeRequest $request )
    {
        $cake = $request->only(['name','email','tel','number']);
        Cake::create($cake);
        return view ('thanks');
        
    }
}
