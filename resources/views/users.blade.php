@extends('layout.app')
@section('content')
    <div class="section-header">
        <h1>Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Users</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                            @foreach($users as $item)
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-title">{{$item->name}}</div>
                                        <div class="text-job text-muted">@ {{$item->username}}</div>
                                    </div>
                                    <div class="media-items">
                                        <div class="media-item">
                                            <div class="media-value">{{$item->land_area}} ha</div>
                                            <div class="media-label">Luas Lahan</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
