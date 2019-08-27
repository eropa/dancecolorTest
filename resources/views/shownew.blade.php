

@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1>
                {{ $data->title }}
            </h1>
            <hr>
                {{ $data->published_at  }}
            <hr>
                {!! $data->content !!}
        </div>
    </div>

@endsection


