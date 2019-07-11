@extends('layouts.app')

@section('content')
<div class="page-content page-title ">
<div class="container">
<div class="card">
        <div class="card-header"></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <h1>
            Pozdravljeni!</h1>
        </div>
        <a  href="{{ route('logout') }}" class="btn btn-big gold"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Odjava') }}
     </a>

     
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
            @csrf
        </form>
    </div>

    

</div>
<div class="page-content">
        <div class="container">

                <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h2>Novice</h2>
                            <a href="/posts" class="btn btn-big black"><span>Vse novice</span></a>
                            
                            <a href="/posts/create" class="btn btn-big black"><span>Ustvari novico</span></a>
                        </div><!-- .col-md-4 end -->
                        <div class="col-md-4 col-sm-6">
                                <h2>Galerija</h2>
                                <a href="#" class="btn btn-big black"><span>Vse slike</span></a>
                                <a href="#" class="btn btn-big black"><span>Dodaj sliko</span></a>
                            </div><!-- .col-md-4 end -->
                            <div class="col-md-4 col-sm-6">
                                    <h2>Povpraševanja</h2>
                                    <a href="#" class="btn btn-big black"><span>Vsa povpraševanja</span></a>
                                </div><!-- .col-md-4 end -->
    
                    </div>
        </div>
</div>
</div>



@endsection
