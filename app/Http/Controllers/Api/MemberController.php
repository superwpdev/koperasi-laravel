<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $response = DB ::connection('mysql')->select('select * from member_models');
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
            'name' => $request->name,
        
        ]);
        $name = $request->name;
        $address = $request->address;
        $telp = $request->telp;
        $email = $request->email;

        $postmember = DB::connection('mysql')->insert("INSERT INTO member_models (name, address, telp, email)
        VALUE
        ('".$name."','".$address."','".$telp."','".$email."')");

        if ($postmember){
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
        $name = $request->name;
        $address = $request->address;
        $telp = $request->telp;
        $email = $request->email;

        $edit = DB::update("UPDATE member_models SET name = '".$name."', address = '".$address."', telp = '".$telp."', email ='".$email."' WHERE id = ".$id."; ");
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
        DB::table('member_models')->delete($id);
    }
}
