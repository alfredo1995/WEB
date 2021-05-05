<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index(){      return view ('site.register');    }

    public function store(Request $request)
    {
        Register::create($request->all());

        return redirect()->route('site.login');
        //return $this->index();
    }

    
}
