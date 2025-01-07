<?php

namespace App\Http\Controllers\Orders;

use App\Filters\OrderFiler;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(OrderFiler $order)
    {
        sleep(1);
        return $order->for(Order::class)->paginate();
    }
}
