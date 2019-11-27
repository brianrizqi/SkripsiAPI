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
                                    <input type="number" class="form-control" name="suhu">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Curah Hujan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="curah_hujan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tekstur
                                    Tanah</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="tekstur_tanah">
                                        <option value="Halus">Halus</option>
                                        <option value="Agak Halus">Agak Halus</option>
                                        <option value="Agak Kasar">Agak Kasar</option>
                                        <option value="Kasar">Kasar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kedalaman
                                    Tanah</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="kedalaman_tanah">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PH</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="ph">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bahaya
                                    Erosi</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="bahaya_erosi">
                                        <option value="Tidak ada">Tidak ada</option>
                                        <option value="Ringan">Ringan</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Berat">Berat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Drainase</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="drainase">
                                        <option value="Terhambat">Terhambat</option>
                                        <option value="Agak Terhambat">Agak Terhambat</option>
                                        <option value="Agak Cepat">Agak Cepat</option>
                                        <option value="Cepat">Cepat</option>
                                        <option value="Baik">Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rotasi
                                    Tanam</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="rotasi_tanam">
                                        <option value="Padi">Padi</option>
                                        <option value="Jagung">Jagung</option>
                                        <option value="Kacang Tanah">Kacang Tanah</option>
                                        <option value="Ubi Kayu">Ubi Kayu</option>
                                        <option value="Ubi Jalar">Ubi Jalar</option>
                                        <option value="Talas">Talas</option>
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
