@extends('layouts.master')


@section('title')
    Dashboard
@endsection


@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header" style='text-align:center;'> Add Role </h1>
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


       <div class="col-lg-12">
           <h6 class="page-header" > Data Entry Employees </h6>
       </div>

       <table class="table">
               <tr>
                   <th>ID</th>
                   <th>UserName</th>
                   <th>Email</th>
                   <th>Password</th>
                   <th>Role</th>
                   <th>Status</th>
                   <th>Action</th>


               </tr>

          @foreach($dataemployee as $dataemployee)
            <tr>
               <td>{{$dataemployee->id}}</td>
               <td>{{$dataemployee->name}}</td>
               <td>{{$dataemployee->email}}</td>
               <td>{{$dataemployee->password}}</td>
               <td>{{$dataemployee->role}}</td>

               @if($dataemployee->status=='approved')
               <td style="color:green;">{{$dataemployee->status}}</td>
               @elseif($dataemployee->status=='denied')
                <td style="color:red;">{{$dataemployee->status}}</td>
               @endif


               <td>
                @if($dataemployee->status=='approved')

                 <a href="" class="btn btn-info" disabled=''>approve</a>
                 @else
                   <a href="{{route('addDataEntryRole',$dataemployee->id)}}" class="btn btn-info">approve</a>
                  @endif
                 ||
                   @if($dataemployee->status=='denied')
                 <a href="#" class="btn btn-danger" disabled=''> deny</a></td>
                 @else
                 <a href="{{route('denyDataEntryRole',$dataemployee->id)}}" class="btn btn-danger"> deny</a>

                @endif

               </td>


            </tr>

           @endforeach



       </table>



       






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
