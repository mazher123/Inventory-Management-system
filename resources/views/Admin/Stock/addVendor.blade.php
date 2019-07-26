@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header" style='text-align:center;'> Add Vendor </h1>
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



                     {!! Form::open(['method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        {{csrf_field()}}




                        <div class="form-group">
                          <label class="control-label col-sm-2" for="name">name:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter quantity" name="name" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="phone">contact number</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="phone" placeholder="Enter price" name="contact" required>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-sm-2" for="phone">email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="phone" placeholder="Enter email" name="email" required>
                          </div>

                        </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Address</label>
                            <div class="col-sm-10">
                              <input type="textarea" class="form-control" id="phone" placeholder="Enter Address" name="address" required>
                            </div>
                         </div>

                      

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>




                     {{ Form::close() }}












</div>









</div>




@endsection
