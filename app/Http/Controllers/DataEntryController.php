<?php

namespace App\Http\Controllers;
use App\Catagory;
use Session;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataEntryController extends Controller
{
  public function Index(){

    return view('DataEntry.dataentryDashboard');
  }

public function AddProduct(){

 $catagory=Catagory::all();



return view('DataEntry.product.addProduct',compact('catagory'));

}


public  function StoreProduct(Request $req){
  $imageFile = $req->file('image');
  $uploadPath = './images/products';
  $ext = $imageFile->getClientOriginalExtension();
  $imageName = rand(1111111111,9999999999) . '.' .$ext;
  $imageFile->move($uploadPath,$imageName);

$product= new Product();

$product->name=$req->name;
$product->price=$req->price;
$product->details=$req->details;
$product->code=$req->code;
$product->catagoryId=$req->catagory;
$product->barcode=$req->barcode;
$product->image= '/images/products/' . $imageName;


$product->save();

Session::flash('message', 'inserted succesfully');
Session::flash('alert-class', 'alert-success');

return redirect()->route('addproduct');





}



public function viewProduct(){

//$product =Product::all();
 $product=DB::table('products')->join('catagories','catagories.id','=','products.catagoryId')->select('products.*','catagories.name as product_catagory')->get();

return view('DataEntry.product.viewproduct',compact('product'));

}







public function AddCatagory(){

return view('DataEntry.catagory.addCatagory');

}


public function StoreCatagory(Request $req){


$catagory =new Catagory();
$catagory->name=$req->name;

$catagory->save();
Session::flash('message', 'inserted succesfully');
Session::flash('alert-class', 'alert-danger');

return redirect()->route('addcatagory');



}




}
