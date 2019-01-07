<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class NumberController extends Controller
{
    public function index()
    {
        $masters = $masters = User::role('master')->get();
        return view('backEnd.admin.number.index', compact('masters'));
    }

    public function getProduct($id) {
        $drawDate = '2018-12-16 16:00:00';
        $products = Product::where([
            ['user_id', '=' , $id],
            ['created_at', '>', $drawDate]
        ])
        ->orderBy('number', 'ASC')
        ->get();
        foreach($products as $product) {
            $price = $this->removeComma($product->price);
            $product['total'] = array_sum($price);
        }
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
        $drawDate = '2018-12-16 16:00:00';

        foreach($datas['number'] as $value) {
            $price = $datas['price'];
            $number = Product::where([
                ['user_id', '=', $datas['user_id']],
                ['number', '=', $value],
                ['created_at', '>', $drawDate]
            ])->first();

            if ($number) {
                $price = $number->price .' , '. $price;
                $number->price = $price;
                $number->update();
            } else {
                $product = Product::create([
                    'user_id' => $datas['user_id'],
                    'number' => $value,
                    'price' => $price
                ]);
            }
        }
        return response()->json(array(
            'success' => true,
            'message' => 'OK'
        ));
    }

    public function showProduct()
    {
        return view('backEnd.admin.number.show');
    }

    public function getProducts() {
        $drawDate = '2018-12-16 16:00:00';
        $products = Product::where([
            ['created_at', '>', $drawDate]
        ])
        ->orderBy('number', 'ASC')
        ->get();
        $datas = [];
        foreach($products as $key => $product) {
            if (!array_key_exists($product->number, $datas)) {
                $datas[$product->number] = $product->price;
            } else {
                $datas[$product->number] = $datas[$product->number] .','. $product->price;
            }
        }
        $products = [];
        $count = 0;
        foreach($datas as $key=>$product) {
            $products[$count]['number'] = $key;
            $products[$count]['price'] = $product;
            $price = $this->removeComma($product);
            $products[$count]['total'] = array_sum($price);
            $count++;
        }
        return response()->json(
            array(
                'success' => true,
                'message' => 'ok',
                'data' => $products
            ));
    }

    public function removeComma($data) {
        $number = explode(',', $data);
        return $number;
    }
}
