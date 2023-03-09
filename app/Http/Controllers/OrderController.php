<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function oneToOne() {
        return Order::find(2)->getBook;
    }

    function testData()
    {
        $data = Order::paginate(10);
        return view("order", ['order'=>$data]);
    }
}
