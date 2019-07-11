@extends('layouts.app')

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-100" style="background-image: url('/storage/bg-home-2.jpeg');">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h1><span>Maš poskrbi</span></h1>
                        <h1>DA BODO VAŠI SPOMINI ŠE BOLJ OKUSNI</h1>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <div class="page-content">
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
