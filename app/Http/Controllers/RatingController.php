<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function saveRating(Request $request, $id)
    {
            if ($request->ajax())
            {
                Rating::insert([
                   'product_id'=>$id,
                    'ra_number'=>$request->number_rating,
                    'content'=>$request->contents,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
//                    'user_id' => get_data_user('web')

                ]);
                $product = Product::find($id);

                $product->total_rating += $request->number_rating;
                $product->total_number +1;
                $product->save();
                return response()->json(['code'=>'1']);
            }
    }
}
