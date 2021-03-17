<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreReserveringRequest;
use App\Models\Auto;


use App\Models\User;
use App\Models\Reservering;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add( $autoId)
    {
        dd($autoId);
        //voeg auto toe aan cart

        /*  Cart::session(auth()->id())->add(array(
            'id' => $auto->id,
            'name' => $auto->name,
            'price' => $auto->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $auto



    ));*/


        return redirect()->route('cart.index');

    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view ('cart.index');
    }
}
