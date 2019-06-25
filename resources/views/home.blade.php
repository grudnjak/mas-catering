@extends('layouts.app')

@section('content')
<div class="page-content page-title " style="background-color:yellowgreen;">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                   
                    <h1>Dashboard </h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
          
        
    </div><!-- .container end -->
</div><!-- .page-content end -->
</div><!-- .row end -->
<div class="container">
<div class="card">
        <div class="card-header"></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
        <a  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

</div>



@endsection
