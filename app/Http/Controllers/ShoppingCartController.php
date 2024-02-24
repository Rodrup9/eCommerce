<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    function index(){
        $url = $_SERVER['REQUEST_URI'];
        return view('moduloShoppingCart.shoppingCart', [
            'nameView' => 'shoppingCart',
            'urlPage' => $url,
            'user' => 'h',
            'cart' => [
                [
                    'producto' => 'mouse',
                    'img' => 'https://picsum.photos/200/300' ,
                    'cantidad' => '1',
                    'precio' => '$200'
                ],
                [
                    'producto' => 'coche',
                    'img' => 'https://picsum.photos/200/300' ,
                    'cantidad' => '1',
                    'precio' => '$100'
                ],
            ]
        ]);
    }
}
