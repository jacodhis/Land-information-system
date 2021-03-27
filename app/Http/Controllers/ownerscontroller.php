<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;
use App\role;

class ownerscontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $owners = owner::all() ;//SELECT EVERYTHING FROM DATABASE
        

         return view('owners.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role_id = role::find(1)->id; //fetch role with id of one

       $user_id = auth()->user()->role_id ;//grabs the id of the logged in user
        if( $user_id == $role_id) { //compares the two role ids
            # code...
               return view('owners.create');
       
        }else{

             return redirect('/')->with('error','un Authorized Page');
       
        }
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $owner = new owner;

         $owner->name = $request->input('name');
         $owner->phone_number = $request->input('phone_number');
         $owner->national_id = $request->input('national_id'); 

         $owner->save();

         return redirect('/owners')->with('success','land owner inserted successfully');

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
        //
    }
}
