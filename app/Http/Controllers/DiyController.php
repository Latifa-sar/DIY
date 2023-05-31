<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\Facades\DB;
use illuminate\Http\Facades\Session;


class DiyController extends Controller
{

    public $v='';

    public function A1 (Request $rinvoice){
     \Session::put('Sessionkey','4');
           return "antthing";
    }

    public function A2 (Request $rinvoice){

        $diy=\DB::table('users')
        ->where('id','=',$rinvoice->Session()->get('Sessionkey'))
        ->get();
        dd($rinvoice);
       }
    public function invoice(Request $rinvoice){


        $Billing=[
'fname'=>$rinvoice->fname,
'lname'=>$rinvoice->lname,
'username'=>$rinvoice->username,
'Email'=>$rinvoice->Email,
'Address'=>$rinvoice->Address,
'Address2'=>$rinvoice->Address2,
'Country'=>$rinvoice->Country,
'State'=>$rinvoice->State,
'Zip'=>$rinvoice->Zip,
'Payment'=>$rinvoice->Payment,
'NameOnCard'=>$rinvoice->NameOnCard,
'CreditCardNum'=>$rinvoice->CreditCardNum,
'Expiration'=>$rinvoice->Expiration,
'CVV'=>$rinvoice->CVV,
'productName'=>$rinvoice->productName,
'total'=>$rinvoice->total,

        ];

      
        \DB::table('invoice')->insert($Billing);

         $Email=\DB::table('invoice')
          ->where('Email','=',$rinvoice->Email)
          ->first();

        return view('invoice',['invoice'=> $Email]);
    }

    public function checkout($id){
$products=\DB::table('products')
->where('id','=',$id)
->first();
return view('checkout',['products'=>$products]);
    }


   public function viweallproducts(){
    
    $products=\DB::table('products')->get();
    return view('diy',['products'=>$products]);

   }
   
   
    //
}
