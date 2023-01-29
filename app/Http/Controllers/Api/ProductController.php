<?php

namespace App\Http\Controllers\Api;

use App\Models\product_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB::connection('mysql')->select('select * from product_models');
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => $request->id_category,

        ]);

        $id_category = $request->id_category;
        $product = $request->product;
        $description = $request->description;
        $image = $request->image;
        $price = $request->price;
        $stock = $request->stock;
        $status = $request->status;



        $postproduct = DB::connection('mysql')->insert("INSERT INTO product_models (id_category, product, description, image, price, stock, status)
        VALUE
        ('" . $id_category . "', '" . $product . "', '" . $description . "', '" . $image . "', '" . $price . "', '" . $stock . "', '" . $status . "')");

        if ($postproduct) {
            $res = response()->json(
                [
                    'status' => 'succes'
                ],
                200
            );
        } else {
            $res = response()->json(
                [
                    'status' => 'failed'
                ],
                500
            );
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
        //
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
        // $validator = Validator::make($request->all(), [
        //     'id_category' => 'required',
        //     'product' => 'required',
        //     'description' => 'required',
        //     'image' => 'required',
        //     'price' => 'required',
        //     'stock' => 'required',
        //     'status' => 'required',
        // ]);

        // //response error validation
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }

        // //update to database
        // $product->update([
        //     'id_category'     => $request->id_category,
        //     'product'   => $request->product,
        //     'description'     => $request->description,
        //     'image'     => $request->image,
        //     'price'     => $request->stock,
        //     'status'     => $request->status,
        // ]);
        // return new ProductResource($product);
        //set validation
        $validator = Validator::make($request->all(), [
            'id_category' => 'required',
            'product' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'status' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update to database
        $wali = product_model::where('id', $request->id)->update([
            'id_category'     => $request->id_category,
            'product'   => $request->product,
            'description'     => $request->description,
            'price'     => $request->stock,
            'status'     => $request->status,
        ]);

        $result = product_model::where('id', $request->id)->first();

        return new ProductResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'id'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $wali = product_model::where('id', $request->id)->delete();

        $result = array("status" => "sukses", "message" => "Hapus Berhasil");

        return new ProductResource($result);
    }
}
