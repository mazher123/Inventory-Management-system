@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header" style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'> Add Product</h1>
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
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Price:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="phone" placeholder="Enter price" name="price" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Details</label>
            <div class="col-sm-10">
              <input type="textarea" class="form-control" id="name" placeholder="Enter Details" name="details" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Catagory</label>
            <div class="col-sm-10">
            <select class="form-control" name="catagory">
                <option >--select--</option>
              @foreach($catagory as $catagories)

                    <option value="{{$catagories->id}}">{{$catagories->name}}</option>


              @endforeach
            </select>
            </div>
          </div>




          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">code:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="Enter code" name="code" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">BarCode:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="Enter code" name="barcode" required>
            </div>
          </div>



          <div class="form-group">
              <label  class="control-label col-sm-2" >Upload Image</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-btn">
                      <span class="btn btn-default btn-file">
                          Browse… <input type="file" name="image" id="imgInp">
                      </span>
                  </span>
                    <input type="text" class="form-control"  readonly >
                </div>
                <img id='img-upload'/>
              </div>


          </div>




          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>




       {{ Form::close() }}





  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  	 <script type="text/javascript">
     $(document).ready( function() {
         	$(document).on('change', '.btn-file :file', function() {
     		var input = $(this),
     			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
     		input.trigger('fileselect', [label]);
     		});

     		$('.btn-file :file').on('fileselect', function(event, label) {

     		    var input = $(this).parents('.input-group').find(':text'),
     		        log = label;

     		    if( input.length ) {
     		        input.val(log);
     		    } else {
     		        if( log ) alert(log);
     		    }

     		});
     		function readURL(input) {
     		    if (input.files && input.files[0]) {
     		        var reader = new FileReader();

     		        reader.onload = function (e) {
     		            $('#img-upload').attr('src', e.target.result);
     		        }

     		        reader.readAsDataURL(input.files[0]);
     		    }
     		}

     		$("#imgInp").change(function(){
     		    readURL(this);
     		});
     	});
  	 </script>


@endsection
