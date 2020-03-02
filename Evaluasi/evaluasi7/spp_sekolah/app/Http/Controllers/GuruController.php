<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use File;
use App\Guru;

class GuruController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->path = storage_path('app/public/images');
    //     $this->dimesions = ['245','300','500'];
    // }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Harus Isi Wajib!!!'
        ];

        $this->validate($request,[
            'nama_guru' => 'required',
            'jabatan_guru' => 'required',
            'alamat' => 'required',
            'status_pendidikan' => 'required',
        ],$messages);

        $guru = Guru::create([
            'nama_guru'         =>  $request->nama_guru,
            'jabatan_guru'      =>  $request->jabatan_guru,
            'alamat'            =>  $request->alamat,
            'status_pendidikan' =>  $request->status_pendidikan
        ]);

        return redirect(route('guru.index'))->with('success','Data berhasil ditambahkan');
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
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit',compact('guru'));
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


        $guru = Guru::findOrFail($id);
        $guru->update($request->all());
        return redirect(route('guru.index'))->with('success','Data Berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->back()->with('succes','Data Berhasil diHapus');

    }
}
