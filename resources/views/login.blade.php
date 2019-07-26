<!doctype html>
<html>

<head>

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{url('css/loginStyle.css')}}">
</head>


<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
         <h3>  Inventory portal</h3>
      </div>

      <!-- Login Form -->
      <form method="post">
         {{ csrf_field() }}
        <div class="row message">
               <div class="col-md-12 form-group" >
                 @if(Session::has('message'))
                 <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                 @endif
               </div>
           </div>
        <input type="text" id="login" class="fadeIn second" name="uname" placeholder="User name" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>



</body>

<script src="{{url('js/bootstrap.min.js')}}"></script>
   <script src="{{url('js/jquery-3.1.1.min.js')}}"></script>


</html>
