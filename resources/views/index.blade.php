

            @extends('layouts.master')

            @section('content')

                    <div class="row justify-content-center">


                        @foreach($datas as $data)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                     xmlns="http://www.w3.org/2000/svg"
                                     preserveAspectRatio="xMidYMid slice"
                                     focusable="false" role="img"
                                     aria-label="Placeholder: {{ $data->title }}"><title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $data->title }}</text></svg>
                                <div class="card-body">
                                    <p class="card-text">
                                        {!! $data->content !!}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-secondary"
                                                    onclick="window.location.href='/{{$data->id}}'"
                                            >Просмотр</button>
                                        </div>
                                        <small class="text-muted">{!! $data->published_at !!}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>

            @endsection


