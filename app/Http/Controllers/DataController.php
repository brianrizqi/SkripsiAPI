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
    public function index($id)
    {
        $data = Data::where('plant_id', $id)->get();
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
        $data->min_value = $request->min_value;
        $data->max_value = $request->max_value;
        $data->parameter = $request->parameter;
        $data->save();
        return redirect('data/create');
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
        $data = Data::where('plant_id', 1)->get();
        $suhu = 0;
        $kedalaman_tanah = 0;
        $ph = 0;

        //suhu
        foreach ($data->where('criteria_id', 1) as $item) {
            $temp = str_replace(" ", "", $item->value);
            $kurang = strpos($temp, '<');
            $lebih = strpos($temp, '>');
            if ($kurang !== false) {
                $batas = substr($temp, -2);
                if ($request->suhu < $batas) {
                    $suhu = $item->parameter;
                }
            } else if ($lebih !== false) {
                $batas = substr($temp, -2);
                if ($request->suhu > $batas) {
                    $suhu = $item->parameter;
                }
            } else {
                $batasAtas = substr($temp, 0, 2);
                $batasBawah = substr($temp, -2);
                $d = $request->suhu;
                if ($d >= $batasAtas && $d <= $batasBawah) {
                    $suhu = $item->parameter;
                }
            }
        }
        //

        //kedalaman tanah
        foreach ($data->where('criteria_id', 4) as $item) {
            $temp = str_replace(" ", "", $item->value);
            $kurang = strpos($temp, '<');
            $lebih = strpos($temp, '>');
            if ($kurang !== false) {
                $batas = substr($temp, -2);
                if ($request->kedalaman_tanah < $batas) {
                    $kedalaman_tanah = $item->parameter;
                }
            } else if ($lebih !== false) {
                $batas = substr($temp, -2);
                if ($request->kedalaman_tanah > $batas) {
                    $kedalaman_tanah = $item->parameter;
                }
            } else {
                $batasAtas = substr($temp, 0, 2);
                $batasBawah = substr($temp, -2);
                $d = $request->kedalaman_tanah;
                if ($d >= $batasAtas && $d <= $batasBawah) {
                    $kedalaman_tanah = $item->parameter;
                }
            }
        }
        //

        //ph
//        foreach ($data->where('criteria_id', 5) as $item) {
//            $temp = str_replace(" ", "", $item->value);
//            $kurang = strpos($temp, '<');
//            $lebih = strpos($temp, '>');
//            if ($kurang !== false) {
//                $batas = substr($temp, -1);
//                if ($request->ph < $batas) {
//                    $ph = $item->parameter;
//                }
//            } else if ($lebih !== false) {
//                $batas = substr($temp, -1);
//                if ($request->ph > $batas) {
//                    $ph = $item->parameter;
//                }
//            } else {
//                $batasAtas = substr($temp, 0, 2);
//                $batasBawah = substr($temp, -1);
//                $d = $request->ph;
//                if ($d >= $batasAtas && $d <= $batasBawah) {
//                    $ph = $item->parameter;
//                }
//            }
//        }
        //

        //metode SMART
        $suhu = ((4 - $suhu) / (4 - 1)) * 0.1;
        $curah_hujan = ((4 - $request->curah_hujan) / (4 - 1)) * 0.1;
        $tekstur_tanah = ((4 - $request->tekstur_tanah) / (4 - 1)) * 0.1;
        $kedalaman_tanah = ((4 - $kedalaman_tanah) / (4 - 1)) * 0.1;
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
        return $hasil;

    }
}
