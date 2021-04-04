<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //Get all Product RESTFul API statements
//        $products = DB::table('products')->get();
//        return response()->json([
//            'Message' => "List of products are",
//            'Products' => $products,
//        ], 201);


        //Get all Product RESTFul web statements

        $products = Product::latest()->get();

        return view('index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|between:2,30',
            'product_code' => 'required|string|max:15',
            'details' => 'required|string|max:100',

        ]);
        $data =
       $products =Product::create($request->all());

       return response()->json("Record created successfully");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return response()->json([
            'Message' => "The required product is",
            'Product' => $product,
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $updatedProduct = Product::findOrFail($id);
        $updatedProduct->update($request->all());
        return response()->json([
            'message' => 'Record updated successfully',
            'Updated Product'=> $updatedProduct
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return response()->json([
            'messsage' => "record deleted successfully",
        ], 201);
    }
}
