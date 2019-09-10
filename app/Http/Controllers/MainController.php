<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
       return view('article.login2');
    }
    public function CheckLogin(Request $request)
    {
        $this->validate($request,
        [
'eamil' => 'required|email',
'password' =>'required|password',
        ]
        );
    }
    public function Chugen()
    {
       return view('article.Chugen');
    }
}
