<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('order.edit');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $order_date = $request->input('order_date');
        $name  = $request->input('contact_name');
        $phone  = $request->input('contact_phone');

        $contact = new Contact(compact('name','phone'));
        $contact->save();
        $order = new Order(compact('order_date'));
        $order->contact()->associate($contact);
        $order->save();
        return response()->json($order);
    }
}
