<?php

namespace App\Http\Controllers;

use App\Keterangan;
use Illuminate\Http\Request;
use Session;
class KeteranganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $k = Keterangan::all();
        return view('keterangan.index',compact('k'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        return view('keterangan.create');
    }//
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $this->validate($request,[
            'keterangan' => 'required|unique:keterangans',
            
        ]);
        $k = new Keterangan;
        $k->keterangan = $request->keterangan;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$k->keterangan</b>"
        ]);
        return redirect()->route('keterangan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
        $k = Keterangan::findOrFail($id);
        return view('keterangan.show',compact('k'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
        $k = Keterangan::findOrFail($id);
        return view('keterangan.edit',compact('k'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
     {
        $this->validate($request,[
            'keterangan' => 'required|',
        
        ]);
        $k = Keterangan::findOrFail($id);
        $k->keterangan = $request->keterangan;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$k->keterangan</b>"
        ]);
        return redirect()->route('keterangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $k = Keterangan::findOrFail($id);
        $k->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('keterangan.index');
    }
}
