@extends('layouts.main')

@section('page-title')
    comics
@endsection

@section('content')
    <section>
        <div class="content">
            <h2 class="title">CURRENT SERIES</h2>
        </div>
        <div class="container my-5 py-3">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <img class="comics-img w-100 img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <h5 class="comics-text text-light">{{ $comic['series'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
