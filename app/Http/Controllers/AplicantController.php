<?php

namespace App\Http\Controllers;

use App\Aplicant;
use Illuminate\Http\Request;
use DB;

class AplicantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aplicant $aplicant,Request $request)
    {
        $aplicant = Aplicant::find($aplicant->id);
        return view('Aplicants.view', ['aplicant'=>$aplicant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Aplicants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = \Auth::user()->id;
        $data = new Aplicant();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->user_id = $id;
        $data->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Bantuan\Aplicant  $aplicant
     * @return \Illuminate\Http\Response
     */
    public function show(Aplicant $aplicant,Request $request)
    {
        $aplicant = Aplicant::find($aplicant->id);
        return view('Aplicants.show', ['aplicant'=>$aplicant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Bantuan\Aplicant  $aplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplicant $aplicant,Request $request)
    {   
        $aplicant = Aplicant::find($aplicant->id);
        return view('Aplicants.edit', ['aplicant'=>$aplicant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Bantuan\Aplicant  $aplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aplicant $aplicant)
    {
        $aplicant = Aplicant::find($aplicant->id);
        $aplicant->nama = $request->nama;
        $aplicant->alamat = $request->alamat;
        $aplicant->save();
        $data = Aplicant::all();
        return view('home',compact('data'));
    }

    public function acc(Request $request, Aplicant $aplicant)
    {
        $aplicant = Aplicant::where('id',$aplicant->id)->first();
        $aplicant->status = "Terverifikasi";
        $aplicant->save();
        $data = Aplicant::all();
        return view('admin',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Bantuan\Aplicant  $aplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $aplicant= Aplicant::find($id);
        $aplicant->delete();
        return back();
    }
}
