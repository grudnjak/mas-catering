@extends('layouts.app')

@section('content')
<div class="page-content mb-100 page-title">
        <div class="container">
    <h1>Edit jedilnik</h1>
    {!! Form::open(["action" => ["JedilnikController@update", $jedilnik->id], "method" => "POST",'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
                {{Form::file('cover_image')}}        
            
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
     
        </div>
</div>
@endsection
