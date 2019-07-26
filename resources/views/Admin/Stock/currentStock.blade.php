@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'>  current Stock</h1>
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
         <th>Current quantity</th>
         <th>Type</th>
       </tr>


       @foreach($products as $product)
     <tr>
        <td>{{$product->name}}</td>
          <td>{{$product->current_stock}}</td>
          <td>{{$product->type}}</td>
     </tr>


@endforeach






   </table>


</div>





</div>







@endsection
