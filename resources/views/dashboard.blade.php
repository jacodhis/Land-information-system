@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WELCOME {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                  
                      
                    @if(Auth::user()->role_id == '1')
                                 <!-- admin  -->
        <ul class="list-unstyled ">
           <li class="nav-item"><a class="nav-link" href="/lands">AVAILABLE LANDS </a> </li> 
        <li class="nav-item"><a class="nav-link" href="/lands/create"> Add Land</a></li> 
        <li class="nav-item"><a class="nav-link" href="/leasing/create"> Add lease Land</a></li>
        <li class="nav-item"><a class="nav-link" href="/owners/create">Add  owners</a></li>
        <li class="nav-item"><a class="nav-link" href="/taxes/create">Add  Tax</a></li>
        <li class="nav-item"><a class="nav-link" href="/payments">View Payments </a></li>
         <!-- <li class="nav-item"><a class="nav-link" href="/userspayments">My Payments </a></li> -->
        
            
       

         </ul>
                    @elseif(Auth::user()->role_id == '2')
                       <!-- user -->
                       <ul class="list-unstyled ">
           <li class="nav-item"><a class="nav-link" href="/lands">AVAILABLE LANDS </a> </li> 
            <li class="nav-item"><a class="nav-link" href="/userspayments">My Payments </a>
               

                <p></p>
            </li>


                       
       </ul>
                    @else
                    <p>No Action</p>



                    @endif

          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
