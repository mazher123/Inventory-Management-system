@extends('layouts.master')


@section('title')
    Dashboard
@endsection




@section('mainContent')

<div id="page-wrapper">



  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"  style='text-align:center; font-weight:600;font-family:cursive; color:#065c6f8c'>  Edit Employee </h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  <form class="form-horizontal" method="post">
    @csrf
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$data->name}}" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$data->email}}" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">Phone No:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="phone" placeholder="Enter number" name="phone" value="{{$data->phone}}" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Address</label>
        <div class="col-sm-10">
          <input type="textarea" class="form-control" id="name" placeholder="Enter address" name="address"value=" {{$data->address}}"  required>
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
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="{{$data->password}}"  required>
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
     <label>Upload Image</label>
     <div class="input-group">
         <span class="input-group-btn">
             <span class="btn btn-default btn-file">
                 Browse… <input type="file" id="imgInp">
             </span>
         </span>
         <input type="text" class="form-control" readonly >
     </div>
     <img id='img-upload'/>
 </div>



      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>




</div>



@endsection
