<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\land;
use App\tax;
use App\role;

class taxcontroller extends Controller
{
    //alloows only authenticated users 
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
        

        $lands = land::all() ;//SELECT EVERYTHING FROM TABLE TAXES
        

         return view('tax.index',compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $lands  = land::all();

          $role_id = role::find(1)->id; //fetch role with id of one

       $user_id = auth()->user()->role_id ;//grabs the id of the logged in user
        if( $user_id == $role_id) { //compares the two role ids
            # code...
               return view('tax.create',compact('lands'));
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
   
         if ($request->hasFile('cover_image')) {
            $filenamewithext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('cover_image')->storeAs('public/titledeeds/cover_images', $filenametostore);
        } else {
            $filenametostore = 'notitldeed.jpg';
        }

         $tax = new tax;
          $tax->title_deed = $filenametostore;
          $tax->tax = $request->input('tax');       
         $tax->year = $request->input('year'); 
         $tax->land_id = $request->input('land' ); 
        
  
         $tax->save();

         return redirect('/taxes')->with('success','land tax rates inserted successfully');

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
