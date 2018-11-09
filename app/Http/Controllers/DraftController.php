<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Draft;
class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $draft = Draft::orderBy('created_at', 'desc')->get();
        return $draft;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateWith([
            'dari' => 'required|max:255',
            'untuk' => 'required|max:255',
            'pesan' => 'required'
        ]);

        $draft = new Draft();
        $draft->dari = $request->dari;
        $draft->untuk = $request->untuk;
        $draft->pesan = $request->pesan;
        $draft->save();

        return response()->json(['status'=>'200','draft'=>$draft]);
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
        $this->validateWith([
            'dari' => 'required|max:255',
            'untuk' => 'required|max:255',
            'pesan' => 'required'
        ]);

        $draft = Draft::findOrFail($id);
        $draft->dari = $request->dari;
        $draft->untuk = $request->untuk;
        $draft->pesan = $request->pesan;
        $draft->save();

        return response()->json(['status'=>'200','draft'=>$draft]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $draft = Draft::findOrFail($id);
        if($draft->count() > 0){
            $draft->delete();
            return response()->json(['status'=>'200','msg'=>'berhasil dihapus']);
        }else{
            return response()->json(['status'=>'400','msg'=>'gagal menghapus']);
        }
       
    }
}
