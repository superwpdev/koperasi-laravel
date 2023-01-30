<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $res_productcategory = DB::select('select * from tbl_category');
        return view('category.index', compact('res_productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $postproductcategory = DB::table('tbl_category')->insert([
            
            'category' => $request->input('category'),
            
        ]);

        return redirect('/productcategory');
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
        $resfindproduccategory = DB::select("SELECT * from tbl_category where id=".$id);
        $findproductcategory = $resfindproduccategory[0];
        return view('category.tampilcategory',compact('findproductcategory'));
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
        $id = $request->id;
        $category = $request->category;

        $updatenews = DB::update("UPDATE tbl_category SET category = '".$category."' WHERE id = ".$id."; ");
        
        return redirect()->route('productcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteproductcategorycontroller = DB::delete("DELETE FROM tbl_category WHERE id=".$id.";");
        return redirect()->route('productcategory');
    }
}
