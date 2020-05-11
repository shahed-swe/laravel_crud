@extends('master.master')
<!-- here the section starts -->
@section('content')
<style>
    form {
        margin-top: 50px;
    }
    h1{
        color: white;
    }
</style>
<form action="{{ URL::to('update_details/'.$p->id)}}" method="POST">
    @csrf
    <div class="form-row col-10 mx-auto">
        <div class="form-group col-12 col-lg-6 col-md-6 col-sm-10">
            <h1 class="head">Fill The Form</h1>
        </div>
    </div>
    <div class="form-row col-10 mx-auto">
        <div class="form-group col-12 col-lg-6 col-md-6 col-sm-10">
            <input type="text" name="slug" placeholder="Enter Slug here" class="form-control @error('slug') is-invalid @enderror" value="{{$p->slug}}">
            @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> 
            @enderror
        </div>
        <div class="form-group col-12 col-lg-6 col-md-6 col-sm-10">
            <input type="text" name="post_title" placeholder="Enter Title Here" class="form-control @error('post_title') is-invalid @enderror" value="{{$p->post_title}}">
            @error('post_title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> 
            @enderror
        </div>
    </div>
    <div class="form-row col-10 mx-auto">
        <div class="form-group col-12 col-lg-6 col-md-6 col-sm-10">
            <input type="text" name="post_summary" placeholder="Enter Summary here" class="form-control @error('post_summary') is-invalid @enderror" value="{{$p->post_summary}}">
            @error('post_summary')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> 
            @enderror
        </div>
        <div class="form-group col-12 col-lg-6 col-md-6 col-sm-10">
            <input type="text" name="description" placeholder="Enter Description here" class="form-control @error('description') is-invalid @enderror" value="{{$p->description}}">
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> 
            @enderror
        </div>
    </div>
    <div class="form-row col-10 mx-auto">
        <div class="form-group col-12 col-lg-12 col-md-6 col-sm-10">
            <input type="submit" class="btn btn-success shadow-none float-right btn-block" value="Send">
        </div>
    </div>
</form>
@endsection