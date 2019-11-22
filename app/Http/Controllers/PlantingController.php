<?php

namespace App\Http\Controllers;

use App\Planting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $plantings = Planting::where('area_id', $id)->get();
        return view('planting', compact('plantings'));
    }

    public function indexApi($id)
    {
        $plantings = Planting::with('plant')->where('area_id', $id)->get();
        $data = array();
        if ($plantings->count() == 0) {
            $data['error'] = true;
            $data['message'] = "No data";
        } else {
            $data['error'] = false;
            $data['message'] = "Success";
            $data['data'] = $plantings;
        }
        return response()->json($data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'area_id' => 'required|integer',
            'plant_id' => 'required|integer'
        ]);
        $data = array();
        if ($validator->fails()) {
            $data['error'] = true;
            $data['message'] = "No data";
        } else {
            $planting = new Planting();
            $planting->area_id = $request->area_id;
            $planting->plant_id = $request->plant_id;
            $planting->profit = 0;
            $planting->loss = 0;
            $planting->status = 0;
            $planting->save();
            $data['error'] = false;
            $data['message'] = "Data berhasil ditambahkan";
        }
        return response()->json($data);
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
}
