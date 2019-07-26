@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'> Operator Employee List </h1>
      </div>
      <!-- /.col-lg-12 -->
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
                            <td><a href="{{route('OperatorEdit',$employee->id)}}" class="btn btn-info">Edit</a>||<a href="{{route('Deleteoperator',$employee->id)}}"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>


           </tr>


       @endforeach




   </table>


</div>





</div>







@endsection
