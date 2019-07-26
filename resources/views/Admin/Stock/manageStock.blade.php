@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'>  manage Stock</h1>
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
         <th>product</th>
         <th>catagory</th>
         <th>vendor</th>
         <th>quantity</th>
         <th>Price</th>
         <th>Status</th>
         <th>Action</th>

       </tr>


@foreach($stocks as $stock)
     <tr>
        <td>{{$stock->productName}}</td>
          <td>{{$stock->catagoryname}}</td>
            <td>{{$stock->vendorName}}</td>
              <td>{{$stock->stockQuantity}} / {{$stock->type}}</td>
                <td>TK {{$stock->buyingprice}} / unit</td>
                  <td>{{$stock->status}}</td>

                      <td><a href="{{route('editStock',$stock->id)}}" class="btn btn-info">Edit</a>||<a href="{{route('deleteStock',$stock->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>


     </tr>

@endforeach






   </table>


</div>





</div>







@endsection
