<?php

namespace App\Http\Controllers;

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
        $res_category = DB::select('select * from product_category_models');
        return view('admin.category.index',compact('res_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rescreatecategory = DB::select("SELECT * from product_category_models");
        $listcategory = $rescreatecategory[0];
        return view('admin.category.add',compact('listcategory'));
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
        $category = $request->category;
        $status = $request->status;

        $listcategory = DB::insert("INSERT INTO product_category_models (category, status)
        VALUE
        ('".$category."','".$status."')");
        return redirect()->route('category.list');
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
        $resfindcategory = DB::select("SELECT * from product_category_models where id=".$id);
        $findcategory = $resfindcategory[0];
        return view('admin.category.edit',compact('findcategory'));
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

        $updatecategory = DB::update("UPDATE product_category_models SET category = '".$category."', status = '".$status."' WHERE id = ".$id."; ");
        
        return redirect()->route('category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletecategory = DB::delete("DELETE FROM product_category_models WHERE id=".$id.";");
        return redirect()->route('category.list');
    }
}
