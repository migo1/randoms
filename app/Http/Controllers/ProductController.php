<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Charts;
use App\User;
use DB;


class ProductController extends Controller
{


    public function index() 
    {
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
$chart = Charts::database($users, 'bar', 'highcharts')
      ->title("Monthly new Register Users")
      ->elementLabel("Total Users")
      ->dimensions(1000, 500)
      ->responsive(false)
      ->groupByMonth(date('Y'), true);
return view('chart',compact('chart'));
    }

    public function voucher($product_id)
    {
        $product=Product::findOrFail($product_id);

        $voucher = $product->createVoucher(['discount_percent' => 10]);

        return view('voucher',compact('product','voucher'));
    }

    public function checkout($product_id, Request $request)
    {
        
    }

}
