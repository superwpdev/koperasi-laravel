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
        $res_product = DB::select('select p.*,tc.category from product_models as p inner join tbl_category as tc on p.id_category = tc.id');
        return view('product.index',compact('res_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = DB::select('select * from tbl_category');
    //    return($categories);
       return view('product.addproduct', compact('categories'));
       
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
        $categories = DB::select('select * from tbl_category');
        // dd($resfindproduct);
        $findproduct = $resfindproduct[0];
        return view('product.editproduct',compact('findproduct','categories'));

        
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
        
        
        $data = [
            'id_category' => $request->input('id_category'),
            'product' => $request->input('product'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status'),
        ];
        if ($image) {
            $data['image'] = $image;
        }

        DB::table('product_models')
        ->where('id',$request->id)
        ->update($data);
        
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
