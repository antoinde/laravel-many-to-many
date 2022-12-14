
@extends('layouts.dashboard')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header">{{ __('Dashboard') }}</div>

               <div class="card-body">
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif

                   {{ __('You are logged in as an administrator!') }}

                   <img style="width: 100%;" src="{{ asset('img/dashboard.png') }}" alt="">
               </div>
           </div>
       </div>
   </div>
</div>
@endsection