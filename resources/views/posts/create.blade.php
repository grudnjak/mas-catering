@extends('layouts.app')
@section('content')
<div class="page-content mb-100 page-title" >
        <div class="container">
    <h1>Dodaj novico</h1>
    {!! Form::open(["action" => "PostsController@store", "method" => "POST",'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title ')}}
        {{
            Form::text('title','',['class'=>'form-control','placeholder'=>'Title','required'])
        }}
    </div>
    <div class="form-group">
            {{Form::label('body','Body ')}}
            {{
                Form::textarea('body',' ',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body text','required'])
            }}
        </div> 
        <div class="form-group">
            {{Form::file('cover_image',['required'])}}        
        
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
     
        </div>
</div>
@endsection