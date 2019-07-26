@extends('layouts.app')
@section('content')
<div class="page-content mb-100 page-title" >
        <div class="container">
    <h1>Dodaj sliko v galerijo</h1>
    {!! Form::open(["action" => "GalerijaController@store", "method" => "POST",'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('cover_image',['required'])}}        
        
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
     
        </div>
</div>
@endsection