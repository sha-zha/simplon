<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class AjoutController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ajout');
    }

      public function store(Request $request)
    {
       $this->validate($request,[
       	'nom'=>'required|min:3',
       	'prenom'=>'required|min:3'
       ]);

    	$Student= New Student ([
    		'nom' =>$request->get('nom'),
    		'prenom' =>$request->get('prenom')
    	]);

    	$Student->save();
        return redirect()->route('liste');
    }
}
