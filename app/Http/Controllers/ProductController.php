<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Turing\Models\Department;
use Turing\Models\Product;

/**
 * The Product controller contains all methods that handles product request
 * Some methods work fine, some needs to be implemented from scratch while others may contain one or two bugs/
 *
 *  NB: Check the BACKEND CHALLENGE TEMPLATE DOCUMENTATION in the readme of this repository to see our recommended
 *  endpoints, request body/param, and response object for each of these method.
 */
class ProductController extends Controller
{

    /**
     * Return a paginated list of products.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllProducts()
    {
        return response()->json(['status' => true, 'products' => Product::countedAndPaginableResults() ]);
    }

    /**
     * Returns a single product with a matched id in the request params.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduct(Product $product)
    {
        return response()->json(['status' => true, 'products' => $product]);
    }

    /**
     * Returns a list of product that matches the search query string.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchProduct()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Returns all products in a product category.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductsByCategory()
    {
        return response()->json(['status' => true, 'products' => Product::countedAndPaginableResultsWithDepartments() ]);
    }

    /**
     * Returns a list of products in a particular department.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductsInDepartment()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Returns a list of all product departments.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllDepartments()
    {
        return response()->json(['message' => 'this works']);
    }

    /**
     * Returns a single department.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDepartment(Department $dep)
    {
        return response()->json(['status' => false, 'department' => $dep]);

    }

    /**
     * Returns all categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCategories()
    {
        return response()->json(['status' => true, 'departments' => Department::all()]);
    }

    /**
     * Returns all categories in a department.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDepartmentCategories()
    {
        return response()->json(['message' => 'this works']);
    }
}
