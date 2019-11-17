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
                    <form method="POST" action="{{route('data.store')}}">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Plant</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="plant">
                                        @foreach($plants as $plant)
                                            <option value="{{$plant->id}}">{{$plant->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Criteria</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="criteria">
                                        @foreach($criterias as $criteria)
                                            <option value="{{$criteria->id}}">{{$criteria->kriteria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Min Value</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="min_value">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Max Value</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="max_value">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Parameter</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="parameter">
                                        @foreach($values as $value)
                                            <option value="{{$value->id}}">{{$value->parameter}}</option>
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
