<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res_news = DB::select('select * from tbl_news');
        return view('news.index', compact('res_news'));
        // return view('news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.addnews');
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

        $postnews = DB::table('tbl_news')->insert([
            'id_category' => $request->input('id_category'),
            'tittle' => $request->input('tittle'),
            'content' => $request->input('content')
        ]);

        return redirect('/news');
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
        $resfindnews = DB::select("SELECT * from tbl_news where id=".$id);
        $findnews = $resfindnews[0];
        return view('news.tampilnews',compact('findnews'));
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
        $id_category = $request->id_category;
        $tittle = $request->tittle;
        $content = $request->content;

        $updatenews = DB::update("UPDATE tbl_news SET id_category = '".$id_category."',tittle='".$tittle."',content='".$content."' WHERE id = ".$id."; ");
        
        return redirect()->route('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletenews = DB::delete("DELETE FROM tbl_news WHERE id=".$id.";");
        return redirect()->route('news');
    }
}
