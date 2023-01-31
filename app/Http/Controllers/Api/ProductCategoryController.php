<?php

namespace App\Http\Controllers\Api;

use App\Models\product_category_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rescategory = DB::select("select * from product_category_models");
        return $rescategory;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => $request->category,

        ]);

        $category = $request->category;
        $status = $request->status;

        $postproductcategory = DB::connection('mysql')->insert("INSERT INTO product_category_models (category,status)
        VALUE
        ('" . $category . "', '" . $status . "')");

        if ($postproductcategory) {
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
        $category = $request->category;
        if (empty($category)) {
            $res = "data kosong";
        } else {
            $insertdb = DB::insert("insert into product_category_models(category) values('" . $category . "')");
            if ($insertdb) {
                $res = 'success';
            } else {
                $res = 'wooii error gaes';
            }
        }
        return $res;
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
        $resfindcategory = DB::select("SELECT * from product_category_models where id=" . $id);
        $resfindcategory = $resfindcategory[0];
        return view('category.edit', compact('findcategory'));
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
        //set validation
        $id = $request->id;
        $category = $request->category;
        $status = $request->status;

        $updateproductcategory = DB::update("UPDATE product_category_models SET category = '" . $category . "', status = '" . $status . "' WHERE id = " . $id . "; ");

        // return redirect()->route('getproductcategory');
        $result = array("status" => "sukses", "message" => "Hapus Berhasil");
        return new CategoryResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletecategory = DB::delete("DELETE FROM product_category_models WHERE id=" . $id . ";");

        $result = array("status" => "sukses", "message" => "Hapus Berhasil");
        return new CategoryResource($result);
    }
}
