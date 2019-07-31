<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use App\Models\ShippingRegion;
use Illuminate\Http\Request;

/**
 * The Shipping Controller contains all the methods that handles all shipping request
 * This piece of code work fine, but you can test and debug any detected issue
 *
 * Class ShippingController
 * @package App\Http\Controllers
 */
class ShippingController extends Controller
{

    /**
     * Returns a list of all shipping region.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getShippingRegions()
    {
        return response()->json(['success' => false, 'shipping' => ShippingRegion::all()]);
    }

    /**
     * Returns a list of shipping type in a specific shipping region.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getShippingType($type_id)
    {
        return response()->json(['success' => true, 'shipping' => Shipping::where('shipping_region_id', $type_id)->first()]);
    }
}
