@extends('layout.app')
@section('content')
    <div class="section-header">
        <h1>Planting</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Planting</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @foreach($plantings as $index => $item)
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-title">Tanaman {{$item->plant->name}}</div>
                                        <div class="text-job text-muted">{{$item->created_at->format('d F Y')}}</div>
                                        <div
                                            class="text-job text-muted">{{$item->status == 0 ? "Masa Tanam": "Panen"}}</div>
                                        <div class="text-job text-muted">Untung
                                            : {{$item->profit == null ? "-": $item->profit}}</div>
                                        <div class="text-job text-muted">Rugi
                                            : {{$item->loss == null ? "-": $item->loss}}</div>
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
