<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        return view('product.index',compact('res_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('product.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image = null;
        if($request->hasFile('foto')){
            $uuid = Str::uuid()->toString();
            $image = $uuid.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('imageproduct/', $image);
            
        }

        DB::table('product_models')->insert([
            'id_category' => $request->input('id_category'),
            'product' => $request->input('product'),
            'description' => $request->input('description'),
            'image' => $image,
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status'),
        ]);
        // dd($postproduct);
       

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        // dd($resfindproduct);
        $findproduct = $resfindproduct[0];
        return view('product.editproduct',compact('findproduct'));
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
        // dd($request->all());
        $image = null;
        if($request->hasFile('foto')){
            $uuid = Str::uuid()->toString();
            $image = $uuid.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('imageproduct/', $image);
            
        }

        // $id = $request->id;
        // $id_category = $request->id_category;
        // $product = $request->product;
        // $description = $request->description;
        // $price = $request->price;
        // $stock = $request->stock;
        // $status = $request->status;

        // DB::update("UPDATE product_models SET id_category = '".$id_category."', product = '".$product."', description = '".$description."', price = '".$price."', stock = '".$stock."', status = '".$status."' WHERE id = ".$id."; ");
        // return redirect()->route('product');
        // dd($request->id);
        // dd($image);
        DB::table('product_models')
        ->where('id',$request->id)
        ->update([
            'id_category' => $request->input('id_category'),
            'product' => $request->input('product'),
            'description' => $request->input('description'),
            'image' => $image,
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status'),
        ]);

        // return view('product.index');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteproduct = DB::delete("DELETE FROM product_models WHERE id=".$id.";");
        return redirect()->route('product');
    }
}
