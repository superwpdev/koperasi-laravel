<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        return view('admin.product.index',compact('res_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rescreateproduct = DB::select("SELECT * from product_models");
        $listproduct = $rescreateproduct[0];
        return view('admin.product.add',compact('listproduct'));
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
        $price = $request->price;
        $stock = $request->stock;

        $listproduct = DB::insert("INSERT INTO product_models (id_category, product, description, price, stock)
        VALUE
        ('".$id_category."','".$product."','".$description."','".$price."','".$stock."')");
        return redirect()->route('product.list');
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
        $resfindproduct = DB::select("SELECT * from product_models where id=".$id);
        $findproduct = $resfindproduct[0];
        return view('admin.product.edit',compact('findproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $id_category = $request->id_category;
        $product = $request->product;
        $description = $request->description;
        $price = $request->price;
        $stock = $request->stock;

        $updateproduct = DB::update("UPDATE product_models SET id = '".$id."' , id_category = '".$id_category."', product = '".$product."', description = '".$description."', price = '".$price."', stock = '".$stock."' WHERE id = ".$id."; ");
        
        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletenews = DB::delete("DELETE FROM product_models WHERE id=".$id.";");
        return redirect()->route('product.list');
    }
}
