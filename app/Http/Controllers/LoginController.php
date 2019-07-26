<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Login;
use App\Product;
use App\Catagory;

class LoginController extends Controller
{

   public function Index(){


   return view ('login');

   }


 public function checklogins(Request $req){

   $this->validate(request(), [
          'uname' => 'required|alpha',
          'password'=> 'required|min:5'
      ]);



      $user = DB::table('logins')->where('username', request('uname'))
              ->where('password', request('password'))
              ->first();

  if($user){

          if($user->role=='admin'){

            $req->session()->put('uname', $req->uname);
            $req->session()->put('role', $user->role);

             $products= Product::count();
             $user= Login::count();
            $catagory=Catagory::count();


             return view('Admin.admindashboard',compact('products'),compact('catagory'),compact('user'));
              //return redirect()->route('Admin.admindashboard', ['uname' => $user->username]);

          }
          else if($user->role=='dataentry'){


                      $req->session()->put('uname', $req->uname);
                      $req->session()->put('role', $user->role);


                  return redirect()->route('DataEntry.dataentryDashboard', ['uname' => $user->username]);

        }

          else if($user->role=='operator'){


                      $req->session()->put('uname', $req->uname);
                      $req->session()->put('role', $user->role);
                      return redirect()->route('Operator.operatorDashboard', ['uname' => $user->username]);

        }
        }

        else {


        Session::flash('message', 'Invalide Username or Password!');
       Session::flash('alert-class', 'alert-danger');

            return view('login');

        }








 }


 public function destroy(Request $req){

        $req->session()->flush();

      return view('login');



    }



}
