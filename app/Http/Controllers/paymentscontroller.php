<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Srmklive\paypal\Services\ExpressCheckout;
// use Srmklive\PayPal\Services\ExpressCheckout;


use App\account;
use App\User;
use App\land;
use App\lease;
use DB;
use App\pay;

class paymentscontroller extends Controller
{
    public function landspaid(){

        $paidlands = pay::all();
      
        return view('pays.landspaid',compact('paidlands'));
    } 
    public function mypayments(){
       $user_id = auth()->user()->id;
         
        // $pay = DB::select("SELECT land_id FROM pays
                            // WHERE user_id = '$user_id' ");
           
           $paidlands = pay::find($user_id)->all();

          return $paidlands;

          
         // $pays = pay::find($user_id);

  


          
     // return view('dashboard',compact('paidlands')); 

    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // leasinf Function
    public function leaseindex($id)
    {
        
      $user_name = auth()->user()->name ;
      $user_email = auth()->user()->email ;
        $land = land::find($id);
        
        if (isset($_POST['submit'])) {
             $purpose = $_POST['purpose'];
         $purpose = lease::find($purpose);
         
             return view('pays.index',compact('purpose','land','purpose','user_name','user_email'));
        }
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchaseindex($id)
    {
        // 
        
         $user_name = auth()->user()->name ;
         $user_email = auth()->user()->email;
           $land = land::find($id);
           // $purpose = 'purchase';
           // return $land->price;
            return view('pays.purchase',compact('land','user_name','user_email'));
      

       
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
      
        $user_id = auth()->user()->id ;
          $land_id =  $request->input('land_id');
          $land_amount = $request->input('amount');
           $buyer_name = $request->input('buyer_name');
          $usage = $request->input('usage');
         $leasing = $request->input('leasing');
          $buyer_email = $request->input('buyer_email');
          $buyer_phone_no = $request->input('buyer_phone_no');


         $pay = new pay;
         $pay->land_id = $land_id;
         $pay->amount=$land_amount;
         $pay->buyer_name = $buyer_name;
         $pay->usage =$usage;
         $pay->purpose = $leasing;
         $pay->phone_no = $buyer_phone_no;
         $pay->email = $buyer_email;
         $pay->user_id = $user_id;

         $pay->save();



           // $amount = DB::select("SELECT amount FROM accounts
                           // WHERE user_id = '$user_id' ");
    
          $user_account = account::find($user_id);
           $num = $user_account->amount;

           
           $int = (int)$num;
           if($int >= $land_amount){
                  $rem = $int - $land_amount;
                   DB::table('accounts') ->where('user_id', $user_id)
                                      ->update(['amount' => $rem]);
          return redirect('/lands')->with('success','land paid sucessfully,we will get back to you in 1hour');
           }else{
             return redirect('/lands')->with('error','no enough money in your account');

                
           }

           
        
       
          
    }
    public function purchase(Request $request){

         $user_id = auth()->user()->id ;
          $buyer_email = auth()->user()->email;
           // $buyer_name= auth()->user()->name;
          $land_id =  $request->input('land_id');
          $buyer_name = $request->input('buyer_name');
        $land_price = $request->input('land_price');
        $buyer_name = $request->input('buyer_name');
          $purchase = $request->input('purchase');
          $usage = $request->input('usage');
        
          // $buyer_email = $request->input('buyer_email');
          $buyer_phone_no = $request->input('buyer_phone_no');


         $pay = new pay;
         $pay->land_id = $land_id;
         $pay->amount  =$land_price;
         $pay->buyer_name = $buyer_name;
         $pay->email = $buyer_email;
         $pay->purpose =$purchase;
         $pay->phone_no = $buyer_phone_no;
         $pay->user_id = $user_id;
         $pay->usage = $usage;

          $pay->save();

        $user_account = account::find($user_id);
           $num = $user_account->amount;

           $int = (int)$num;

           if($int >= $land_price){
                  $rem = $int - $land_price;
                   DB::table('accounts') ->where('user_id', $user_id)
                                      ->update(['amount' => $rem]);
          return redirect('/lands')->with('success','land paid sucessfully,we will get back to you in 1hour');
           }else{
             return redirect('/lands')->with('error','no enough money in your account');

                
           }

         return redirect('/lands')->with('success','land paid successfully');
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
          $purchasedland = pay::find($id) ;//SELECT EVERYTHING FROM DATABASE
          // dd($purchasedland);
          return view('pays.show',compact('purchasedland'));
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
