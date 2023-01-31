<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $response = DB ::connection('mysql')->select('select * from product_models');
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_category' => $request->id_category,
        
        ]);
        $id_category = $request->id_category;
        $product = $request->product;
        $description = $request->description;
        $price = $request->price;
        $stock = $request->stock;

        $postproduct = DB::connection('mysql')->insert("INSERT INTO product_models (id_category, product, description, price, stock)
        VALUE
        ('".$id_category."','".$product."','".$description."','".$price."','".$stock."')");

        if ($postproduct){
        $res = response()->json(
        [
        'status' => 'success'
        ], 200);
        }
        else
        {
        $res = response()->json(
        [
        'status' => 'failed'
        ], 500);
        }
        return $res;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return $resfindproduct;
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

        $edit = DB::update("UPDATE product_models SET id_category = '".$id_category."', product = '".$product."', description = '".$description."', price ='".$price."' WHERE id = ".$id."; ");
        return true; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product_models')->delete($id);
    }
}
