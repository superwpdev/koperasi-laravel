<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class ProductVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res_voucher = DB::select('select * from voucher_models');
        return view('admin.voucher.index',compact('res_voucher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rescreatevoucher = DB::select("SELECT * from voucher_models");
        $listvoucher = $rescreatevoucher[0];
        return view('admin.voucher.add',compact('listvoucher'));
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
        $voucher_name = $request->voucher_name;
        $value = $request->value;
        $status = $request->status;

        $listvoucher = DB::insert("INSERT INTO voucher_models (voucher_name, value, status)
        VALUE
        ('".$voucher_name."','".$value."','".$status."')");
        return redirect()->route('voucher.list');
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
        $resfindvoucher = DB::select("SELECT * from voucher_models where id=".$id);
        $findvoucher = $resfindvoucher[0];
        return view('admin.voucher.edit',compact('findvoucher'));
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
        $voucher_name = $request->voucher_name;
        $value = $request->value;
        $status = $request->status;

        $updatevoucher = DB::update("UPDATE voucher_models SET id = '".$id."' , voucher_name = '".$voucher_name."', value = '".$value."', status = '".$status."' WHERE id = ".$id."; ");
        
        return redirect()->route('voucher.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletevoucher = DB::delete("DELETE FROM voucher_models WHERE id=".$id.";");
        return redirect()->route('voucher.list');
    }
}
