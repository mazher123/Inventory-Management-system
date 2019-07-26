@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'>  Data Entry Employee list</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  <div class="row message">
         <div class="col-md-12 form-group" >
           @if(Session::has('message'))
           <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
           @endif
         </div>
     </div>


<div  class="col-sm-12">
   <table class="table">
       <tr>
         <th>Username</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Address</th>
         <th>Role</th>
         <th>password</th>
         <th>Image</th>
         <th>Action</th>

       </tr>

 @foreach($employees as $employee)

     <tr>
        <td>{{$employee->name}}</td>
          <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
              <td>{{$employee->address}}</td>
                <td>{{$employee->password}}</td>
                  <td>{{$employee->role}}</td>
                    <td><img  src="{{asset($employee->image)}}" height="60px" width="80px"></td>
                      <td><a href="{{route('EditDataEntryEmployee',$employee->id)}}" class="btn btn-info">Edit</a>||<a href="{{route('DeleteDataEmployee',$employee->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>


     </tr>


 @endforeach





   </table>


</div>





</div>







@endsection
