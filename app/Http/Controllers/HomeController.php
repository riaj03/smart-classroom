<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authuserRole = Auth::getUser()->role_id;
        if($authuserRole == 3){
            $student = \App\Student::where('user_id', Auth::getUser()->id)->first();
            if($student->status == 0 ){
                Auth::logout();
                return ('You are not activated yet, please contact with admin.');
            }
        }
        return view('home');
    }
    public function help()
    {
        return view('help');
    }
    public function contact()
    {
        return view('contact');
    }
}
