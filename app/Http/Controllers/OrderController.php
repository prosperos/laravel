<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResourse;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResourse::collection(Order::all());
    }
}
