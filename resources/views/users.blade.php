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
                @foreach($users as $item)
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-title">{{$item->name}}</div>
                                        <div class="text-job text-muted">@ {{$item->username}}</div>
                                    </div>
                                    <div class="media-items">
                                        <div class="media-item">
                                            <a href="{{route('area',['id'=>$item->id])}}" class="btn btn-primary">Detail
                                                Area</a>
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
