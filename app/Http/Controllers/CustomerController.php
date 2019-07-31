<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

/**
 * Customer controller handles all requests that has to do with customer
 * Some methods needs to be implemented from scratch while others may contain one or two bugs.
 *
 *  NB: Check the BACKEND CHALLENGE TEMPLATE DOCUMENTATION in the readme of this repository to see our recommended
 *  endpoints, request body/param, and response object for each of these method
 *
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{

    /**
     * Allow customers to create a new account.
     *
     * @param CreateCustomerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateCustomerRequest $request)
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Allow customers to login to their account.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Allow customers to view their profile info.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCustomerProfile(Customer $customer)
    {
        return response()->json(['status' => 'truw', 'customer' => $customer]);
    }

    /**
     * Allow customers to update their profile info like name, email, password, day_phone, eve_phone and mob_phone.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCustomerProfile()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Allow customers to update their address info/
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCustomerAddress()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Allow customers to update their credit card number.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCreditCard()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Apply something to customer.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apply()
    {
        return response()->json(['message' => 'this works']);
    }


}
