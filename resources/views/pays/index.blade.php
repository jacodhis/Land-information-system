@extends('layouts.app')
@section('content')


<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Leasing  
                <div class="card-body">

                  <div class="payments">
                    <form action="/submitpayment" method="POST">
                    {{ csrf_field() }}
                    <ul class="list-unstyled">
                        <h3><?php  $leasing = 'leasing'; ?></h3>
                      <h3><b>Land Name : <?php echo  $land->name ?></b></h3>
                      <li><h5><b>Payment : {{$purpose->payment}} Kshs</b></h5></li>

                     
                      <li><b>Purpose : {{$purpose->usage}}</b></li>
                      <li>Customer Name : {{$user_name}} </li>
                      <li>Customer Email Adress : {{$user_email}}</li>
                      <li><h5>phone number</h5>
                        <input type="number" name="buyer_phone_no" value="#" required="" placeholder="Enter your phone number"></li>
                    </ul>

                        <input type="hidden" name="leasing" value="<?php echo($leasing)?>">
                     <input type="hidden" name="land_id" value="<?php echo($land->id)?>">
                      <input type="hidden" name="amount" value="<?php echo($purpose->payment)?>">
                       <input type="hidden" name="usage" value="<?php echo($purpose->usage)?>">
                        <input type="hidden" name="buyer_name" value="<?php echo($user_name)?>">
                           <input type="hidden" name="buyer_email" value="<?php echo($user_email)?>">
                     

                    <input type="submit" name="submit" class="btn btn-primary" value="submitpayment : <?php  echo($purpose->payment)?>" > 
                    <!-- <a href="submitpayment" class="btn btn-primary">submit Payment</a> -->
                      </form>


                  </div>



             <?php
                    $landname = $land->name; 
                    $payment =$purpose->payment;
                     $usage = $purpose->usage;
                     $buyer_name = $user_name;
                     $buyer_email = $user_email;   
                  

                  // $amount = "SELECT amount FROM accounts
                  //       WHERE user_id = '1' ";

                  //    echo $amount;
                  
                ?>



    <!-- <form method="post" action="{{url('/Payments')}}" >
    {{ csrf_field() }}

           

            <div class="form-group">
         <label for="amount ">amount :</label>
        <input type="text" class="form-control" name="amount" required="" value="{{$purpose->payment}}">
            </div>

         <div class="form-group">
         <label for="amount ">usage :</label>
        <input type="text" class="form-control" name="#" required="" value="{{$purpose->usage}}">
            </div>

             <div class="form-group">
         <label for="amount ">Land Name :</label>
        <input type="text" class="form-control" name="#" required="" value="{{$land->name}}">
            </div>
            
             <div class="form-group">
         <label for="name">account_number:</label>
        <input type="text" class="form-control" name="account_number"  required="">
            </div>
        
    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form> -->
    
</div>
</div>
</div>
</div>
</div>




@endsection

