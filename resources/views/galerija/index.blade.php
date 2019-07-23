@extends('layouts.app')
@section('content')
<div class="page-content page-title">
        <div class="container">
        <div class="row">
         <div class="col-md-12 col-xs-12">
         <div class="custom-heading style-2">
                        <h4>Galerija</h4>
                        <div class="divider style-1">
                            <i class="fa fa-circle hr-icon left"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div>
        @if(count($slike) >= 1)
    
        @foreach ($slike as $key => $slika)
        <div class="row mb-0">
        <div class="pi-latest-posts col-md-12 col-sm-12">
               
                    <img src="/storage/cover_images/{{$slika->cover_image}}"  >
                <ul class="post-meta">              
                    <li>
                        <ul class="meta-time triggerAnimation animated fadeInLeft" data-animate="fadeInLeft" style="opacity: 1;">                           
                           <li>@if(!Auth::guest())
                            @if(Auth::user()->id == $slika->user_id)
                        <a href="/galerija/{{$slika->id}}/edit" class="btn btn-default">Edit</a>
                
                        {!!Form::open(['action' => ['GalerijaController@destroy', $slika->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                        @endif 
                        @endif</li>
                        </ul>
                    </li><li>
                </li></ul><!-- .post-meta end -->

            </div>
    
        
        </div>
         </div>
        </div>
    @endforeach
    
    @endif
    </div>
        </div>
        </div>
    @endsection