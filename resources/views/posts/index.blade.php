@extends('layouts.app')
@section('content')
<div class="page-content page-title">
        <div class="container">
        <div class="row">
         <div class="col-md-12 col-xs-12">
         <div class="custom-heading style-2">
                        <h4>ZADNJE NOVICE</h4>
                        <div class="divider style-1">
                            <i class="fa fa-circle hr-icon left"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div>
        @if(count($posts) >= 1)
    
        @foreach ($posts as $key => $post)
        <div class="row mb-0">
        <div class="pi-latest-posts col-md-12 col-sm-12">
                <a href="/posts/{{$post->id}}l">
                    <img src="/storage/cover_images/{{$post->cover_image}}"  >
                </a>
                <div class="custom-heading style-2">
                    <a href="/posts/{{$post->id}}">
                        <h4>{{$post->title}}</h4>
                    </a>
                    <div class="divider style-3">
                        <i class="fa fa-circle hr-icon left"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div><!-- .custom-heading.style-2 end -->
        
                <ul class="post-meta">              
                    <li>
                        <ul class="meta-time triggerAnimation animated fadeInLeft" data-animate="fadeInLeft" style="opacity: 1;">
                            <li>{!!date('H:i', strtotime($post->created_at))!!} </li>
                            <li>{!!date('D d', strtotime($post->created_at))!!}</li>
                            <li>{!!date('M', strtotime($post->created_at))!!}</li>
                        </ul>
                    </li><li>
                </li></ul><!-- .post-meta end -->
                <p>{{$post->body}}</p>
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