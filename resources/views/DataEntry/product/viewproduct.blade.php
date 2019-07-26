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
         <th>name</th>
         <th>price</th>
         <th>Details</th>
         <th>Catagory</th>
         <th>code</th>
         <th>BarCode</th>
         <th>Image</th>
         <th>Action</th>

       </tr>

 @foreach($product as $product)

     <tr>
        <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
            <td>{{$product->details}}</td>
              <td>{{$product->product_catagory}}</td>
                <td>{{$product->code}}</td>
                  <td>{{$product->barcode}}</td>
                    <td><img  src="{{asset($product->image)}}" height="60px" width="80px"></td>
                      <td><a href="" class="btn btn-info">Edit</a></td>

     </tr>


 @endforeach





   </table>


</div>





</div>







@endsection
