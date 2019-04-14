<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    public function dashboard()
    {
        $subject = file_get_contents('http://www.thailotto.org/thai-national-lottery/');
        $first_step = explode('<table class="GeneratedTable">', $subject);
        $second_step = explode('<td>', $first_step[1]);
        $number = $second_step[3];  //get number
        $lucky_number = substr("$number", 0, 3);
        $datas = Product::where('number', $lucky_number)->select('price')->get();
        $amount = [];
        foreach($datas as $data) {
            $price = array_sum(explode(',', $data->price));
            array_push($amount, $price);
        }
        $amount = array_sum($amount);
        $peoples = Product::where('number', $lucky_number)->distinct('user_id')->count('user_id');
        return view('backEnd.admin.dashboard', compact('lucky_number', 'amount', 'peoples'));
    }
}
