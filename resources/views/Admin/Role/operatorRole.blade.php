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
           <h6 class="page-header"> Operator Employees </h6>
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

               @foreach($operatoremployee as $operatoremployee)
                 <tr>
                    <td>{{$operatoremployee->id}}</td>
                    <td>{{$operatoremployee->name}}</td>
                    <td>{{$operatoremployee->email}}</td>
                    <td>{{$operatoremployee->password}}</td>
                    <td>{{$operatoremployee->role}}</td>
                    @if($operatoremployee->status=='approved')
                    <td style="color:green;">{{$operatoremployee->status}}</td>
                    @elseif($operatoremployee->status=='denied')
                     <td style="color:red;">{{$operatoremployee->status}}</td>
                    @endif

                    <td>
                     @if($operatoremployee->status=='approved')

                      <a href='#' class="btn btn-info" disabled=''>approve</a>
                      @else
                        <a href="{{route('permitOperatorRole',$operatoremployee->id)}}" class="btn btn-info">approve</a>
                       @endif
                      ||
                        @if($operatoremployee->status=='denied')
                      <a href="#" class="btn btn-danger" disabled=''> deny</a></td>
                      @else
                      <a href="{{route('denyOperatorRole',$operatoremployee->id)}}" class="btn btn-danger"> deny</a>

                     @endif

                    </td>

                 </tr>

                @endforeach




       </table>

</div>


@endsection
