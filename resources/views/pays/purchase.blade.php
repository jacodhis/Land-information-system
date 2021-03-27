@extends('layouts.app')
@section('content')

<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> purchase  
                <div class="card-body">

                  <div class="payments">
                    <form action="/submitpurchase" method="POST">
                    {{ csrf_field() }}
                    <ul class="list-unstyled">
                        <h3><?php  $purchase = 'purchase'; 
                                      $usage = 'none'?></h3>
                      <h3><b>Land Name : <?php echo  $land->name ?></b></h3>
                      <li>Customer Name : {{$user_name}} </li>
                      <li>Customer Email Adress : {{$user_email}}</li>
                      <li>Land Price : {{$land->price}}</li>
                      <li><h5>phone number</h5>

                        <input type="number" name="buyer_phone_no" value="#" required="" placeholder="Enter your phone number"></li>
                    </ul>

                        <input type="hidden" name="purchase" value="<?php echo($purchase)?>">
                         <input type="hidden" name="land_price" value="<?php echo($land->price)?>"> 
                     <input type="hidden" name="land_id" value="<?php echo($land->id)?>">
                      <input type="hidden" name="usage" value="<?php echo($usage)?>">
                       <input type="hidden" name="buyer_name" value="<?php echo($user_name)?>"> -->

                    <input type="submit" name="submit" class="btn btn-primary" value="submitpayment :  {{$land->price}}" > 
                    <!-- <a href="submitpayment" class="btn btn-primary">submit Payment</a> -->
                      </form>


                  </div>





@endsection

