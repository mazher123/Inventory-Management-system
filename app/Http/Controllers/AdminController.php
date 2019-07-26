<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\DataEmployee;
use App\Operator;
use App\Login;
use App\Stock;
use App\Catagory;
use App\Product;
use App\Vendor;
use App\QuantityType;
use App\Damage;
class AdminController extends Controller
{
  public function Index(){

    return view('Admin.admindashboard');
  }


public function AddDataEntryEmployee(){

return view('Admin.DataEntryAdmin.addDataEntryEmployee');

}


public function InsertDataEmployee(Request $req){


         $imageFile = $req->file('image');
         $uploadPath = './images/products';
         $ext = $imageFile->getClientOriginalExtension();
         $imageName = rand(1111111111,9999999999) . '.' .$ext;
         $imageFile->move($uploadPath,$imageName);




$dataemployee= new DataEmployee();
$dataemployee->name=$req->name;
$dataemployee->email=$req->email;
$dataemployee->password=$req->pwd;
$dataemployee->phone=$req->phone;
$dataemployee->address=$req->address;
$dataemployee->status=$req->status;
$dataemployee->role=$req->role;
$dataemployee->image= '/images/products/' . $imageName;
$dataemployee->save();
Session::flash('message', 'inserted succesfully');
Session::flash('alert-class', 'alert-danger');

return redirect()->route('DataEntryAdmin.add');
}




 public function viewDataEmployee(){

  $employees= DataEmployee::all();


  return view('Admin.DataEntryAdmin.viewDataEmployeeList',compact('employees'));
}

public function DataEntryDestroy($id){
    $data=DataEmployee::destroy($id);

    $employees= DataEmployee::all();


    return view('Admin.DataEntryAdmin.viewDataEmployeeList',compact('employees'));



}



public function EditDataEntryEmployee($id){

$data= DataEmployee::find($id);


return view('Admin.DataEntryAdmin.editDataEntryEmployee',compact('data'));


}

public function UpdateDataEntryEmployee(Request $req,$id){




  $dataemployee=DataEmployee::find($id);
  $dataemployee->name=$req->name;
  $dataemployee->email=$req->email;
  $dataemployee->password=$req->pwd;
  $dataemployee->phone=$req->phone;
  $dataemployee->address=$req->address;
  $dataemployee->status=$req->status;
  $dataemployee->role=$req->role;


  $dataemployee->save();
  Session::flash('message', 'Edited  succesfully');
  Session::flash('alert-class', 'alert-danger');

return redirect()->route('DataEntryAdmin.view');





}












public function AddOperatorEmployee(){

  return view('Admin.OperatorAdmin.addOperatorEmployee');
}

public function InsertOperatorEmployee(Request $req){

  $imageFile = $req->file('image');
  $uploadPath = './images/products';
  $ext = $imageFile->getClientOriginalExtension();
  $imageName = rand(1111111111,9999999999) . '.' .$ext;
  $imageFile->move($uploadPath,$imageName);



  $operatoremployee= new Operator();
  $operatoremployee->name=$req->name;
  $operatoremployee->email=$req->email;
  $operatoremployee->password=$req->pwd;
  $operatoremployee->phone=$req->phone;
  $operatoremployee->address=$req->address;
  $operatoremployee->status=$req->status;
  $operatoremployee->role=$req->role;
  $operatoremployee->image= '/images/products/' . $imageName;


  $operatoremployee->save();
  Session::flash('message', 'inserted succesfully');
  Session::flash('alert-class', 'alert-danger');
  return redirect()->route('OperatorAdmin.add');




}


public function viewOperatorEmployee(){
$employees= Operator::all();
  return view('Admin.OperatorAdmin.viewOperatorEmployeeList',compact('employees'));
}



public function OperatorEdit($id){

 $data= Operator::find($id);

 return view ('Admin.OperatorAdmin.editOperatorEmployee',compact('data'));

}


public function UpdateOperator(Request $req,$id){


  $operatoremployee=Operator::find($id);
  $operatoremployee->name=$req->name;
  $operatoremployee->email=$req->email;
  $operatoremployee->password=$req->pwd;
  $operatoremployee->phone=$req->phone;
  $operatoremployee->address=$req->address;
  $operatoremployee->status=$req->status;
  $operatoremployee->role=$req->role;

  $operatoremployee->save();
  Session::flash('message', 'Edited succesfully');
  Session::flash('alert-class', 'alert-danger');
  return redirect()->route('OperatorAdmin.view');


}






public function OperatorDestroy($id){


$data= Operator::destroy($id);
$employees= Operator::all();
  return view('Admin.OperatorAdmin.viewOperatorEmployeeList',compact('employees'));




}










public function AddRole(){
   $dataemployee= DataEmployee::all();
   $operatoremployee= Operator::all();



    return view ('Admin.Role.addRole',compact('dataemployee','operatoremployee'));
}
public function AddOpRole(){

  $dataemployee= DataEmployee::all();
  $operatoremployee= Operator::all();



   return view ('Admin.Role.operatorRole',compact('dataemployee','operatoremployee'));

}



public function addDataEntryRole($id){

  $dataemployee= DataEmployee::find($id);

  $dataemployee->status="approved";
  $dataemployee->Save();
  $login =new Login();

  $login->username=$dataemployee->name;
  $login->password=$dataemployee->password;
  $login->email=$dataemployee->email;
  $login->role=$dataemployee->role;

  $login->Save();

  return redirect()->route('Role.add');






}


public function denyDataEntryRole($id){

$dataemployee= DataEmployee::find($id);

$email=$dataemployee->email;

$login= DB::table('logins')->where('email',$email)->delete();
$dataemployee->status="denied";
$dataemployee->save();

$dataemployee= DataEmployee::all();
$operatoremployee= Operator::all();



 return view ('Admin.Role.addRole',compact('dataemployee','operatoremployee'));




}



public function permitOperatorRole($id){

  $operatoremployee= Operator::find($id);

  $operatoremployee->status="approved";
  $operatoremployee->Save();
  $login =new Login();

  $login->username=$operatoremployee->name;
  $login->password=$operatoremployee->password;
  $login->email=$operatoremployee->email;
  $login->role=$operatoremployee->role;

  $login->Save();

  return redirect()->route('Role.operator');

}


public function denyOperatorRole($id){

$operatoremployee= Operator::find($id);

$email=$operatoremployee->email;

$login= DB::table('logins')->where('email',$email)->delete();
$operatoremployee->status="denied";
$operatoremployee->save();

// $dataemployee= DataEmployee::all();
// $operatoremployee= Operator::all();

return redirect()->route('Role.operator');

 //return view ('Admin.Role.addRole',compact('dataemployee','operatoremployee'));




}



public function createStock(){

     $catagory= catagory::all();
     $vendor= Vendor::all();
     $quantities= QuantityType::all();
  return view ('Admin.Stock.createStock',compact('catagory','vendor','quantities'));
}

public function InsertStock(Request $req){

$stock= new Stock();


$stock->product=$req->product;
$stock->catagory=$req->catagory;
$stock->stockQuantity=$req->quantity;
$stock->buyingprice=$req->buyprice;
$stock->vendor=$req->vendor;
$stock->status=$req->status;
$stock->quantityType=$req->type;

$stock->save();


Session::flash('message', 'inserted succesfully');
Session::flash('alert-class', 'alert-success');

return redirect()->route('createStock');

}



public function addVendor(){


  return view('Admin.Stock.addVendor');



}

public function InsertVendor(Request $req){

 $vendor= new Vendor();

 $vendor->name= $req->name;
 $vendor->email=$req->email;
 $vendor->Address=$req->address;
 $vendor->contact=$req->contact;

 $vendor->Save();
 Session::flash('message', 'inserted succesfully');
 Session::flash('alert-class', 'alert-success');


return redirect()->route('addvendor');


}



   public function ManageStock(){

     $stocks = DB::table('stocks')
           ->join('products','products.id','=','stocks.product')
           ->join('vendors','vendors.id','=','stocks.vendor')
           ->join('quantity_types','quantity_types.id','=','stocks.quantityType')
           ->join('catagories','catagories.id','=','products.catagoryId')
           ->select('stocks.*','products.name as productName','vendors.name as vendorName','quantity_types.quantity_type as type','catagories.name as catagoryname')
  ->get();
  // return $stocks->productsName;
  return view('Admin.Stock.manageStock',compact('stocks'));

   }



public function productFetch($id){

       $product = DB::table("products")->where("catagoryId",$id)->pluck("name","id");
         return json_encode($product);
}





public  function deleteStock($id){

$stock= Stock::destroy($id);

return redirect()->route('managestock');

}



public function editStock($id){

$stock= Stock::find($id);
$catagory= catagory::all();
$vendor= Vendor::all();
$quantities= QuantityType::all();
return view('Admin.Stock.editStock',compact('stock','catagory','vendor','quantities'));

}



public function updatestock(Request $req){


  $stock= new Stock();


  $stock->product=$req->product;
  $stock->catagory=$req->catagory;
  $stock->stockQuantity=$req->quantity;
  $stock->buyingprice=$req->buyprice;
  $stock->vendor=$req->vendor;
  $stock->status=$req->status;
  $stock->quantityType=$req->type;

  $stock->save();


  Session::flash('message', 'inserted succesfully');
  Session::flash('alert-class', 'alert-success');


return redirect()->route('managestock');

}


       public function damangeStock(){

         $catagory= catagory::all();
         $quantities= QuantityType::all();
          return view('Admin.Stock.DamageStock',compact('catagory','quantities'));


       }



       public function insertDamageStock(Request $req){

                 $damage= new Damage();

                  $damage->productId=$req->product;
                   $damage->catagoryId=$req->catagory;
                   $damage->DamageQuantity=$req->quantity;
                   $damage->type=$req->type;
                    $damage->Reason=$req->reason;
                    $damage->Save();


                    Session::flash('message', 'damaged product inserted succesfully');
                    Session::flash('alert-class', 'alert-success');
                    return redirect()->route('managestock');

       }


public function currentStock(){

         $products = Product::get();

    foreach($products as $product){
           $curent_stock = Stock::where('product',$product->id)->sum('stockQuantity');
           $curent_stock -= Damage::where('productId',$product->id)->sum('DamageQuantity');
          
           $product->current_stock = $curent_stock;

          }

    return view ('Admin.Stock.currentStock',compact('products'));


  }

}
