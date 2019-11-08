@extends('layout.app')
@section('content')
    <div class="section-header">
        <h1>Create Criteria</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="/">Criteria</a></div>
            <div class="breadcrumb-item">Create</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="{{route('criteria.store')}}">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kriteria</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="kriteria">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bobot</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="bobot">
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
