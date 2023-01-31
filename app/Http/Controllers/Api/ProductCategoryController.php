<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB ::connection('mysql')->select('select * from product_category_models');
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
            'category' => $request->category,
        
        ]);
        $category = $request->category;
        $status = $request->status;

        $postcategory = DB::connection('mysql')->insert("INSERT INTO product_category_models (category, status)
        VALUE
        ('".$category."','".$status."')");

        if ($postcategory){
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
        $id = $request->id;
        $category = $request->category;
        $status = $request->status;

        $edit = DB::update("UPDATE product_category_models SET category = '".$category."', status = '".$status."' WHERE id = ".$id."; ");
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
        DB::table('product_category_models')->delete($id);
    }
}
