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
        $data = Data::all();
        return view('create_sppk', compact('data'));
    }

    public function hitungsppk(Request $request)
    {
        $results = array();
        for ($i = 1; $i < 7; $i++) {
            $data = Data::where('plant_id', $i)->get();
            $suhu = 0;
            $kedalaman_tanah = 0;
            $ph = 0;
            $curah_hujan = 0;
            $tekstur_tanah = 0;
            $bahaya_erosi = 0;
            $drainase = 0;
            $rotasi_tanam = 0;
            //suhu
            foreach ($data->where('criteria_id', 1) as $item) {
                if ($item->min_value != null && $item->max_value != null) {
                    if ($request->suhu >= $item->min_value && $request->suhu <= $item->max_value) {
                        $suhu = $item->parameter;
                    }
                } else if ($item->max_value == null && $item->min_value != null) {
                    if ($request->suhu < $item->min_value) {
                        $suhu = $item->parameter;
                    }
                } else if ($item->min_value == null && $item->max_value != null) {
                    if ($request->suhu > $item->max_value) {
                        $suhu = $item->parameter;
                    }
                }
            }
            //

            //curah hujan

            foreach ($data->where('criteria_id', 2) as $item) {
                if ($item->min_value != null && $item->max_value != null) {
                    if ($request->curah_hujan >= $item->min_value && $request->curah_hujan <= $item->max_value) {
                        $curah_hujan = $item->parameter;
                    }
                } else if ($item->max_value == null && $item->min_value != null) {
                    if ($request->curah_hujan < $item->min_value) {
                        $curah_hujan = $item->parameter;
                    }
                } else if ($item->min_value == null && $item->max_value != null) {
                    if ($request->curah_hujan > $item->max_value) {
                        $curah_hujan = $item->parameter;
                    }
                }
            }

            //

            //kedalaman tanah
            foreach ($data->where('criteria_id', 4) as $item) {
                if ($item->min_value != null && $item->max_value != null) {
                    if ($request->kedalaman_tanah >= $item->min_value && $request->kedalaman_tanah <= $item->max_value) {
                        $kedalaman_tanah = $item->parameter;
                    }
                } else if ($item->max_value == null && $item->min_value != null) {
                    if ($request->kedalaman_tanah < $item->min_value) {
                        $kedalaman_tanah = $item->parameter;
                    }
                } else if ($item->min_value == null && $item->max_value != null) {
                    if ($request->kedalaman_tanah > $item->max_value) {
                        $kedalaman_tanah = $item->parameter;
                    }
                }
            }
            //

            foreach ($data->where('criteria_id', 5) as $item) {
                if ($item->min_value != null && $item->max_value != null) {
                    if ($request->ph >= $item->min_value && $request->ph <= $item->max_value) {
                        $ph = $item->parameter;
                    }
                } else if ($item->max_value == null && $item->min_value != null) {
                    if ($request->ph < $item->min_value) {
                        $ph = $item->parameter;
                    }
                } else if ($item->min_value == null && $item->max_value != null) {
                    if ($request->ph > $item->max_value) {
                        $ph = $item->parameter;
                    }
                }
            }

            //tesktur tanah
            $tekstur_tanah = $data->where('criteria_id', 3)->where('min_value', $request->tekstur_tanah)->first()->parameter;
            //

            //bahaya_erosi

            $bahaya_erosi = $data->where('criteria_id', 6)->where('min_value', $request->bahaya_erosi)->first()->parameter;
            //

            //drainase

            $drainase = $data->where('criteria_id', 7)->where('min_value', $request->drainase)->first()->parameter;

            //

            //rotasi tanam
            if ($data->where('criteria_id', 8)->where('min_value', $request->rotasi_tanam)->first() == null) {
                $rotasi_tanam = 4;
            } else {
                $rotasi_tanam = $data->where('criteria_id', 8)->where('min_value', $request->rotasi_tanam)->first()->parameter;
            }
            //

            //metode SMART
            $suhu = ((4 - $suhu) / (4 - 1)) * ($data->where('criteria_id', 1)->first()->criteria->bobot * 0.01);
            $curah_hujan = ((4 - $curah_hujan) / (4 - 1)) * ($data->where('criteria_id', 2)->first()->criteria->bobot * 0.01);
            $tekstur_tanah = ((4 - $tekstur_tanah) / (4 - 1)) * ($data->where('criteria_id', 3)->first()->criteria->bobot * 0.01);
            $kedalaman_tanah = ((4 - $kedalaman_tanah) / (4 - 1)) * ($data->where('criteria_id', 4)->first()->criteria->bobot * 0.01);
            $ph = ((4 - $ph) / (4 - 1)) * ($data->where('criteria_id', 5)->first()->criteria->bobot * 0.01);
            $bahaya_erosi = ((4 - $bahaya_erosi) / (4 - 1)) * ($data->where('criteria_id', 6)->first()->criteria->bobot * 0.01);
            $drainase = ((4 - $drainase) / (4 - 1)) * ($data->where('criteria_id', 7)->first()->criteria->bobot * 0.01);
            $rotasi_tanam = ((4 - $rotasi_tanam) / (4 - 1)) * ($data->where('criteria_id', 8)->first()->criteria->bobot * 0.01);
            $normalisasi = ($suhu + $curah_hujan + $tekstur_tanah + $kedalaman_tanah + $ph + $bahaya_erosi
                    + $drainase + $rotasi_tanam) * 100;
            $hasil = "";
            if ($normalisasi > 0 && $normalisasi < 25) {
                $hasil = "Tidak Sesuai";
            } else if ($normalisasi >= 25 && $normalisasi < 50) {
                $hasil = "Rata-rata";
            } else if ($normalisasi >= 50 && $normalisasi < 75) {
                $hasil = "Cukup Sesuai";
            } else if ($normalisasi >= 75 && $normalisasi < 101) {
                $hasil = "Sangat Sesuai";
            }
            $result = array();
            $result['id'] = $data->first()->plant_id;
            $result['tanaman'] = $data->first()->plant->name;
            $result['normalisasi'] = round($normalisasi);
            $result['hasil'] = $hasil;
            array_push($results, $result);
        }
        usort($results, function ($a, $b) {
            if ($a['normalisasi'] == $b['normalisasi']) return 0;
            return $a['normalisasi'] < $b['normalisasi'] ? 1 : -1;
        });
        $array = array();
        $array['error'] = false;
        $array['message'] = "Success";
        $array['data'] = $results;
        return response()->json($array);
    }
}
