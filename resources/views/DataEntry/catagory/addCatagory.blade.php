@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header" style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'> Add catagory</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  <div class="col-sm-12">
    <div class="row message">
           <div class="col-md-12 form-group" >
             @if(Session::has('message'))
             <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
             @endif
           </div>
       </div>


       {!! Form::open(['method'=>'POST','class'=>'form-horizontal']) !!}
          {{csrf_field()}}


          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>




       {{ Form::close() }}





  </div>




@endsection
