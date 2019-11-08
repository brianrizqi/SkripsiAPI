<?php

namespace App\Http\Controllers;

use App\Criteria;
use App\Data;
use App\Plant;
use App\Value;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        return view('data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plants = Plant::all();
        $criterias = Criteria::all();
        $values = Value::all();
        return view('create_data', compact('plants', 'criterias', 'values'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Data();
        $data->plant_id = $request->plant;
        $data->criteria_id = $request->criteria;
        $data->value = $request->value;
        $data->parameter = $request->parameter;
        $data->save();
        return redirect('data');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sppk()
    {
        $data = Data::where('plant_id', 1)->get();
        return view('create_sppk', compact('data'));
    }

    public function hitungsppk(Request $request)
    {
        $suhu = ((4 - $request->suhu) / (4 - 1)) * 0.1;
        $curah_hujan = ((4 - $request->curah_hujan) / (4 - 1)) * 0.1;
        $tekstur_tanah = ((4 - $request->tekstur_tanah) / (4 - 1)) * 0.1;
        $kedalaman_tanah = ((4 - $request->kedalaman_tanah) / (4 - 1)) * 0.1;
        $ph = ((4 - $request->ph) / (4 - 1)) * 0.1;
        $bahaya_erosi = ((4 - $request->bahaya_erosi) / (4 - 1)) * 0.1;
        $ketebalan_gambut = ((4 - $request->ketebalan_gambut) / (4 - 1)) * 0.1;
        $drainase = ((4 - $request->drainase) / (4 - 1)) * 0.1;
        $rotasi_tanam = ((4 - $request->rotasi_tanam) / (4 - 1)) * 0.2;
        $normalisasi = ($suhu + $curah_hujan + $tekstur_tanah + $kedalaman_tanah + $ph + $bahaya_erosi
                + $ketebalan_gambut + $drainase + $rotasi_tanam) * 100;
        $hasil = "";
        if ($normalisasi > 0 && $normalisasi < 30) {
            $hasil = "Tidak Berhasil";
        } else if ($normalisasi >= 30 && $normalisasi < 71) {
            $hasil = "Dipertimbangkan";
        } else if ($normalisasi > 70 && $normalisasi <= 100) {
            $hasil = "Berhasil";
        }
        return $normalisasi;

    }
}
