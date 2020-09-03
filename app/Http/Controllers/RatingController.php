<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function saveRating(Request $request, $id)
    {
        $product = Product::find($id);
        $product->total_number += $_GET['number_rating'];
        $product->total_rating +=1;
        $product->save();
//        $test = $_GET['name'];
        Rating::insert([
                   'product_id'=>$id,
                    'ra_number'=>$_GET['number_rating'],
                    'content'=>$_GET['contents'],
                    'name' => $_GET['name'],
                    'email' => $_GET['email'],
                    'phone' => $_GET['phone']

        ]);
//        dd($product->total_rating, $product->total_number + 1, $test );

        return response()->json(['code'=>'1']);

    }

}
