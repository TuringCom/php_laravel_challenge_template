<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function getShippingRegions () {}
    public function getShippingType () {}
    public function generateUniqueCart () {}
    public function addItemToCart () {}
    public function getCart () {}
    public function updateCartItem () {}
    public function emptyCart () {}
    public function removeItemFromCart () {}
    public function createOrder () {}
    public function getCustomerOrders () {}
    public function getOrderSummary () {}
    public function processStripePayment () {}
}
