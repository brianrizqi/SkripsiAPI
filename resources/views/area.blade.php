@extends('layout.app')
@section('content')
    <div class="section-header">
        <h1>Area</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Area</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @foreach($areas as $index => $item)
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-title">Lahan {{$index + 1}}</div>
                                        <div class="text-job text-muted">Luas {{$item->large}} HA</div>
                                    </div>
                                    <div class="media-items">
                                        <div class="media-item">
                                            <a href="{{route('planting',['id'=>$item->id])}}" class="btn btn-primary">Detail
                                                Plant</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
