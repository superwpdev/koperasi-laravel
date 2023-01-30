<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\MemberModel;
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
        $res_member = DB ::connection('mysql')->select('select * from member_models');
        return view('admin.member.index',compact('res_member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $rescreatemember = DB::select("SELECT * from member_models");
        $storemember = $rescreatemember[0];
        return view('admin.member.add',compact('storemember'));
        // $data = [
        //     'name' => Request()->name,
        //     'address' => Request()->address,
        //     'telp' => Request()->telp,
        //     'email' => Request()->email,
        // ];
        // $this->MemberModel->addData($data);

        // // $postmember = DB::connection('mysql')->insert("INSERT INTO member_models (name, address, telp, email)
        // // VALUE
        // // ('".$name."','".$address."','".$telp."','".$email."')");
        // return redirect()->route('member.list');
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
        $name = $request->name;
        $address = $request->address;
        $telp = $request->telp;
        $email = $request->email;

        $storemember = DB::insert("INSERT INTO member_models (name, address, telp, email)
        VALUE
        ('".$name."','".$address."','".$telp."','".$email."')");
        return redirect()->route('member.list');
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
        $resfindmember = DB::select("SELECT * from member_models where id=".$id);
        $findmember = $resfindmember[0];
        return view('admin.member.edit',compact('findmember'));
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

        $updatemember = DB::update("UPDATE member_models SET name = '".$name."', address = '".$address."', telp = '".$telp."' WHERE id = ".$id."; ");
        
        return redirect()->route('member.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletenews = DB::delete("DELETE FROM member_models WHERE id=".$id.";");
        return redirect()->route('member.list');
    }
}
