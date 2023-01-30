<?php

namespace App\Http\Controllers\Api;

use App\Models\member_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MemberResource;
use DB;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB::connection('mysql')->select('select * from member_models');
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
            'name' => $request->name,

        ]);

        $name = $request->name;
        $address = $request->address;
        $telp = $request->telp;
        $email = $request->email;
        $status = $request->status;


        $postmember = DB::connection('mysql')->insert("INSERT INTO member_models (name, address, telp, email, status)
        VALUE
        ('" . $name . "', '" . $address . "', '" . $telp . "', '" . $email . "', '" . $status . "')");

        if ($postmember) {
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
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'status' => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update to database
        $voucher = member_model::where('id', $request->id)->update([
            'name'     => $request->name,
            'address'   => $request->address,
            'telp'   => $request->telp,
            'email'   => $request->email,
            'status'   => $request->status
        ]);

        $result = member_model::where('id', $request->id)->first();

        return new MemberResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletemember = DB::delete("DELETE FROM member_models WHERE id=" . $id . ";");

        $result = array("status" => "sukses", "message" => "Hapus Berhasil");
        return new MemberResource($result);
    }
}
