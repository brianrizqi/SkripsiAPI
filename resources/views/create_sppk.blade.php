@extends('layout.app')
@section('content')
    <div class="section-header">
        <h1>Create Data</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="/">Data</a></div>
            <div class="breadcrumb-item">Create</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="{{route('sppk.store')}}">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Suhu</label>
                                <div class="col-sm-12 col-md-7">
{{--                                    <select class="form-control" name="suhu">--}}
{{--                                        @foreach($data->where('criteria_id',1) as $item)--}}
{{--                                            <option value="{{$item->parameter}}">{{$item->value}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
                                    <input type="number" class="form-control" name="suhu">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Curah Hujan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="curah_hujan">
                                        @foreach($data->where('criteria_id',2) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tekstur Tanah</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="tekstur_tanah">
                                        @foreach($data->where('criteria_id',3) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kedalaman Tanah</label>
                                <div class="col-sm-12 col-md-7">
{{--                                    <select class="form-control" name="kedalaman_tanah">--}}
{{--                                        @foreach($data->where('criteria_id',4) as $item)--}}
{{--                                            <option value="{{$item->parameter}}">{{$item->value}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
                                    <input type="number" class="form-control" name="kedalaman_tanah">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PH</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="ph">
                                        @foreach($data->where('criteria_id',5) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bahaya Erosi</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="bahaya_erosi">
                                        @foreach($data->where('criteria_id',6) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ketebalan Gambut</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="ketebalan_gambut">
                                        @foreach($data->where('criteria_id',7) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Drainase</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="drainase">
                                        @foreach($data->where('criteria_id',8) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rotasi Tanam</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="rotasi_tanam">
                                        @foreach($data->where('criteria_id',9) as $item)
                                            <option value="{{$item->parameter}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Publish</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
