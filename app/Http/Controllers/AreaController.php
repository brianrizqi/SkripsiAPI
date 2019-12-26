<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $areas = Area::where('user_id', $id)->get();
        return view('area', compact('areas'));
    }

    public function indexApi($id)
    {
        $areas = Area::with('plantings.plant')->where('user_id', $id)->get();
        $data = array();
        if ($areas->count() == 0) {
            $data['error'] = true;
            $data['message'] = "No data";
        } else {
            $data['error'] = false;
            $data['message'] = "Success";
            $data['data'] = $areas;
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
            'user_id' => 'required|integer',
            'large' => 'required|integer'
        ]);
        $data = array();
        if ($validator->fails()) {
            $data['error'] = true;
            $data['message'] = "No data";
        } else {
            $area = new Area();
            $area->user_id = $request->user_id;
            $area->large = $request->large;
            $area->save();
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
        $area = Area::find($id);
        $data = array();
        if ($area != null) {
            $data['error'] = false;
            $data['message'] = "Ada data";
            $data['data'] = $area;
        } else {
            $data['error'] = true;
            $data['message'] = "Tidak ada data";
        }
        return response()->json($data);
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
        $validator = Validator::make($request->all(), [
            'large' => 'required|integer'
        ]);
        $data = array();
        if ($validator->fails()) {
            $data['error'] = true;
            $data['message'] = "No data";
        } else {
            $area = Area::find($id);
            $area->large = $request->large;
            $area->save();
            $data['error'] = false;
            $data['message'] = "Data berhasil diupdate";
        }
        return response()->json($data);
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
