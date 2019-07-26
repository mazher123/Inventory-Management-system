@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'>  Edit stock </h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  {!! Form::open(['method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
     {{csrf_field()}}




     <div class="form-group">
       <label class="control-label col-sm-2" for="name">Catagory</label>
       <div class="col-sm-10">
       <select class="form-control dynamic" id="catagory" name="catagory" data-dependent="product">
           <option value="select" >--select--</option>

           @foreach($catagory as $catagory)
               <option value="{{$catagory->id}}" >{{$catagory->name}}</option>

           @endforeach

       </select>
       </div>
     </div>



     <div class="form-group">
       <label class="control-label col-sm-2" for="name">product</label>
       <div class="col-sm-10">
       <select class="form-control" id="product" name="product">


           <option value="select" >--select--</option>

       </select>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2" for="name">quantity:</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="name" placeholder="Enter quantity" name="quantity" value='{{$stock->stockQuantity}}' required>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2" for="name">quantity Type</label>
       <div class="col-sm-10">
       <select class="form-control" name="type">
           <option value="select" >--select--</option>
           @foreach($quantities as $quantity)
               <option value="{{$quantity->id}}" >{{$quantity->quantity_type}}</option>

           @endforeach

       </select>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2" for="phone">Buying Price:</label>
       <div class="col-sm-10">
         <input type="number" class="form-control" id="phone" placeholder="Enter price" value="{{$stock->buyingprice}}" name="buyprice" required>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2" for="name">vendor</label>
       <div class="col-sm-10">
       <select class="form-control" name="vendor">
           <option value="select" >--select--</option>
           @foreach($vendor as $vendor)
               <option value="{{$vendor->id}}" >{{$vendor->name}}</option>

           @endforeach

       </select>
       </div>
     </div>


     <div class="form-group">
       <label class="control-label col-sm-2" for="phone">status</label>
       <div class="col-sm-10">
       <select class="form-control" name="status">
           <option value="available" >Available</option>
           <option value="unavailable" >Unavailable</option>

       </select>
       </div>

     </div>



     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-success">Submit</button>
       </div>
     </div>




  {{ Form::close() }}





</div>


<script type="text/javascript">


$(document).ready(function ()
    {
            jQuery('select[name="catagory"]').on('change',function(){
               var catagoryid = jQuery(this).val();
               if(catagoryid)
               {
                  jQuery.ajax({
                     url : '/admindashboard/stock/' +catagoryid,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="product"]').empty();
                        jQuery.each(data, function(key,value){

                           $('select[name="product"]').append('<option value="'+ key+'">'+value +'</option>');
                        });
                     }


                  });
               }
               else
               {
                  $('select[name="product"]').empty();
               }
            });
    });








</script>




@endsection
