<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexKamar()
    {
        $rooms = Room::all();
        return view('indexKamar', ['rooms' => $rooms]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPenghuni()
    {
        $penghunis = Penghuni::all();
        return view('indexPenghuni', ['penghunis' => $penghunis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if($request->image) {
            $images = $request->image;
            $imageFile = time(). "." . $images->extension();
            $images->move(storage_path('app/public/images'), $imageFile);
        };

        $penghuni = new Penghuni;

        $penghuni->nama = $request->nama;
        $penghuni->alamatAsal = $request->alamatAsal;
        $penghuni->noTelp = $request->noTelp;
        $penghuni->nomorKamar = $request->nomorKamar;
        $penghuni->image = $imageFile;
        
        $penghuni->save();

        return response()->redirectTo('/penghuni');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPenghuni($id)
    {
        $penghunis = Penghuni::find($id);
        return view('showPenghuni', compact('penghunis'));
    }

    public function showKamar($id)
    {
        $rooms = Room::find($id);
        return view('showKamar', ['rooms' => $rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penghunis = Penghuni::find($id);
        return view('edit', ['id' => $id, 'penghunis' => $penghunis]);
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
        $penghunis = Penghuni::find($id);
        $databaru = [
            'nama' => $request->input('nama'),
            'alamatAsal' => $request->input('alamatAsal'),
            'noTelp' => $request->input('noTelp'),
            'nomorKamar' => $request->input('nomorKamar')
        ];
        $penghunis->update($databaru);
        return response()->redirectTo('/penghuni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penghunis = Penghuni::find($id);
        $penghunis->delete();
        return response()->redirectTo('/penghuni');
    }
}
