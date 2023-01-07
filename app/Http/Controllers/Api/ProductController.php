<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res_product = DB::select('select * from product_models');
        return $res_product;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $id_category = $request->id_category;
        $product = $request->product;
        $description = $request->description;
        $image = $request->image;
        $price = $request->price;
        $stock = $request->stock;
        $status = $request->status;

        dump($id);
        dump($id_category);
        dump($product);
        dump($description);
        dump($image);
        dump($price);
        dump($stock);
        dump($status);

        DB::insert("INSERT INTO product_models (id,id_category,product,description,image,price,stock,status)
VALUES (" . $id . "," . $id_category . ",'" . $product . "','" . $description . "','" . $image . "'," . $price . "," . $stock . ",'" . $status . "')");


        dd("test ini endpoint post product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}