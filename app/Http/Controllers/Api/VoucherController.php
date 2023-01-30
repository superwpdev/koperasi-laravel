<?php

namespace App\Http\Controllers\Api;


use App\Models\voucher_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\VoucherResource;
use DB;


class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB::connection('mysql')->select('select * from voucher_models');
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
            'voucher_name' => $request->voucher_name,

        ]);


        $voucher_name = $request->voucher_name;
        $value = $request->value;
        $status = $request->status;


        $postvoucher = DB::connection('mysql')->insert("INSERT INTO voucher_models (voucher_name, value, status)
        VALUE
        ('" . $voucher_name . "', '" . $value . "', '" . $status . "')");

        if ($postvoucher) {
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
    public function update(Request $request, $id)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'voucher_name' => 'required',
            'value' => 'required',
            'status' => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update to database
        $voucher = voucher_model::where('id', $request->id)->update([
            'voucher_name'     => $request->voucher_name,
            'value'   => $request->value,
            'status'   => $request->status
        ]);

        $result = voucher_model::where('id', $request->id)->first();

        return new VoucherResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletevoucher = DB::delete("DELETE FROM voucher_models WHERE id=" . $id . ";");

        $result = array("status" => "sukses", "message" => "Hapus Berhasil");
        return new VoucherResource($result);
    }
}
