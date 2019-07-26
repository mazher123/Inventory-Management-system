@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header" style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'> Add Data Entry Employee</h1>
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
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Phone No:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="phone" placeholder="Enter number" name="phone" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Address</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="name" placeholder="Enter address" name="address" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Role</label>
          <div class="col-sm-10">
          <select class="form-control" name="role">
                  <option >--select--</option>
                  <option value=dataentry>DataEntry</option>
                  <option value=operator>Operator</option>

          </select>
          </div>
        </div>




        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
          </div>
        </div>



        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Status</label>
          <div class="col-sm-10">
          <select class="form-control" name="status">
                  <option >--select--</option>
                  <option value=approved>Approved</option>
                  <option value=denied>Denied</option>

          </select>
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
      </form>




  </div>






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
