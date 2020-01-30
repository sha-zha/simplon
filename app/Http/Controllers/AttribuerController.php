<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribuer;
use DB;
class AttribuerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = DB::table('students')->select('nom','prenom','id')->get();
    $pc = DB::table('computers')->select('label','id')->get();

    
    [
        'users'=>$users,
        'pc'=>$pc
    ];
    
    return view('attribuer',compact('users','pc') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
        'id_user'=>'required',
        'id_pc'=>'required',
        'jour'=>'required',
        'heure'=>'required'
       ]);

        $Attribuer= New Attribuer ([
            'id_user' =>$request->get('id_user'),
            'id_pc' =>$request->get('id_pc'),
            'jour' =>$request->get('jour'),
            'heure' =>$request->get('heure')
        ]);

        $Attribuer->save();
        return redirect()->route('liste');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $liste = Attribuer::find($id);
        $liste->delete();
        return redirect()->route('liste');
    }
}
