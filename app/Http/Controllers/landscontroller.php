<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\land;
use App\owner;
use App\role;

class landscontroller extends Controller
{
    // allows  for user authentication
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lands = land::all() ;//SELECT EVERYTHING FROM DATABASE

        return view('lands.index',compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $owners = owner::all();

         $role_id = role::find(1)->id; //fetch role with id of one

        $user_id = auth()->user()->role_id ;//grabs the id of the logged in user
         if( $user_id == $role_id) { //compares the two role ids
       //      # code...

             return view('lands.create',compact('owners'));
       
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
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }

         $land = new land;


         $land->image = $filenametostore; 
         $land->name = $request->input('name');
         $land->location = $request->input('location');
         $land->acre = $request->input('acre'); 
         $land->price = $request->input('price');  
         $land->owner_id = $request->input('owner'); 

         $land->save();    
          

        // $role_id = Auth::user()->role_id;

         

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
         $land = land::find($id) ;//SELECT EVERYTHING FROM DATABASE
          return view('lands.show',compact('land'));
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
