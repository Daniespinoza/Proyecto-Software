<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exhibitor;

class ExhibitorsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('exhi');
    }
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    //
}
