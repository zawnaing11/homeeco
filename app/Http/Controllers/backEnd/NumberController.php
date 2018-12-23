<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Carbon\Carbon;

class NumberController extends Controller
{
    public function index()
    {
        $masters = $masters = User::role('master')->get();
        return view('backEnd.admin.number.index', compact('masters'));
    }

    public function getProduct($id) {
        $products = Product::where('user_id', $id)
        ->whereDate('created_at', Carbon::today())
        ->get();
        return response()->json(
            array(
                'success' => true,
                'message' => 'ok',
                'data' => $products
            ));
    }

    public function saveProduct(Request $request)
    {
        $datas = $request->all();
        foreach($datas['number'] as $value) {
            $price = $datas['price'];
            $product = Product::create([
                'user_id' => $datas['user_id'],
                'number' => $value,
                'price' => $price
            ]);
        }
        return response()->json(array(
            'success' => true,
            'message' => 'OK'
        ));
    }
}
