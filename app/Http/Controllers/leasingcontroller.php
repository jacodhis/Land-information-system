<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lease;
use App\user;
use App\owner;
use App\land;
use App\role;

class leasingcontroller extends Controller
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
    public function index($id)
    {
        

        $land = land::find($id) ;//SELECT EVERYTHING FROM DATABASE
     
        return view('leases.index',compact('land'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lands  = land::all();

        $role_id = role::find(1)->id; //fetch role with id of one

       $user_id = auth()->user()->role_id ;//grabs the id of the logged in user
        if( $user_id == $role_id) { //compares the two role ids
            # code...
              return view('leases.create',compact('lands'));
            
       
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
         $lease = new lease;

         $lease->usage = $request->input('usage');
         $lease->payment = $request->input('payment');
         $lease->period = $request->input('period'); 
         $lease->land_id = $request->input('land'); 
         $lease->user_id = auth()->user()->id;
  
         $lease->save();

         return redirect('/lands')->with('success','land inserted successfully');

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
