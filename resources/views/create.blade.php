

@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">

                <div class="card-body">
                    <p class="card-text">
                    <h1>Создать новую запись</h1>
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Название</label>
                                <input type="text"
                                       class="form-control"
                                       name="title"
                                       required
                                       placeholder="Название страницы">
                            </div>
                            <div class="col">
                                <label for="inputAddress">Время публикации</label>
                                <input type="datetime-local"
                                       name="published_at"
                                       class="form-control"
                                       required
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Текст новости</label>
                            <textarea class="form-control"
                                      name="content"
                                      required
                                      placeholder="Текст новости"
                                      id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </p>
                </div>
        </div>
    </div>

@endsection


