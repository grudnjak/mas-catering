@extends('layouts.app')
@section('content')
<div class="page-content page-title">
        <div class="container">
        <div class="row">
         <div class="col-md-12 col-xs-12">
         <div class="custom-heading style-2">
                        <h4>Jedilniki</h4>
                        <div class="divider style-1">
                            <i class="fa fa-circle hr-icon left"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div>
        @if(count($jedilniki) >= 1)
    
        @foreach ($jedilniki as $key => $jedilnik)
        <div class="row mb-0">
        <div class="pi-latest-posts col-md-12 col-sm-12">
               
                    <img src="/storage/cover_images/{{$jedilnik->cover_image}}"  >
                <ul class="post-meta">              
                    <li>
                        <ul class="meta-time triggerAnimation animated fadeInLeft" data-animate="fadeInLeft" style="opacity: 1;">
                            <li>{!!date('H:i', strtotime($jedilnik->created_at))!!} {!!date('D d', strtotime($jedilnik->created_at))!!} {!!date('M', strtotime($jedilnik->created_at))!!} </li>
                           
                           <li>@if(!Auth::guest())
                            @if(Auth::user()->id == $jedilnik->user_id)
                        <a href="/jedilniki/{{$jedilnik->id}}/edit" class="btn btn-default">Edit</a>
                
                        {!!Form::open(['action' => ['JedilnikController@destroy', $jedilnik->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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