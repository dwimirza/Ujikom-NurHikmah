<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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

    $dataSiswa = [
        'nama' => $request->nama,
        'namaOrtu' => $request->namaOrtu,
        'nomorOrtu' => $request->nomorOrtu,
        'kartuKeluarga' => $request->kartuKeluarga,
        'akte' => $request->akte,
         'buktiPembayaran' => $request->buktiPembayaran,
    ];

    
    
    if($request->hasFile('kartuKeluarga'))
    {
        $destination_path = 'public/images/'; //path tempat penyimpanan (storage/public/images/profile)
        $image = $request -> file('kartuKeluarga'); //mengambil request column photo
        $image_name = $image->getClientOriginalName(); //memberikan nama gambar yang akan disimpan di foto
        $path = $request->file('kartuKeluarga')->storeAs($destination_path, $image_name); //mengirimkan foto ke folder store
        $dataSiswa['kartuKeluarga'] = $image_name; //mengirimkan ke database
    }

    if($request->hasFile('akte'))
    {
        $destination_path = 'public/images/'; //path tempat penyimpanan (storage/public/images/profile)
        $image = $request -> file('akte'); //mengambil request column photo
        $image_name = $image->getClientOriginalName(); //memberikan nama gambar yang akan disimpan di foto
        $path = $request->file('akte')->storeAs($destination_path, $image_name); //mengirimkan foto ke folder store
        $dataSiswa['akte'] = $image_name; //mengirimkan ke database
    }

    if($request->hasFile('buktiPembayaran'))
    {
        $destination_path = 'public/images/'; //path tempat penyimpanan (storage/public/images/)
        $image = $request -> file('buktiPembayaran'); //mengambil request column photo
        $image_name = $image->getClientOriginalName(); //memberikan nama gambar yang akan disimpan di foto
        $path = $request->file('buktiPembayaran')->storeAs($destination_path, $image_name); //mengirimkan foto ke folder store
        $dataSiswa['buktiPembayaran'] = $image_name; //mengirimkan ke database
    }
    $dataSiswa->save();
    Siswa::create($dataSiswa);

    return redirect()->route('home')->with('success', 'Data Berhasil Ditambahkan');






    // }


//    if ($request->hasFile('akte')) {
//     $akte = $request->file('akte');
//     $filename = time().'.'.$photo->getClientOriginalExtension();
//     $destinationPath = public_path('public/images/');
//     $akte->move($destinationPath, $filename);
//     $siswa->akte = $filename;
// }


//    if ($request->hasFile('bukti')) {
//     $bukti = $request->file('bukti');
//     $filename = time().'.'.$photo->getClientOriginalExtension();
//     $destinationPath = public_path('public/images/');
//     $bukti->move($destinationPath, $filename);
//     $siswa->bukti = $filename;
// }


}

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
