@extends('layouts.main')

@section('page-title')
    comics
@endsection

@section('content')
    <section>
        <div class="content">
            <h2 class="title">CURRENT SERIES</h2>
        </div>
        <div class="container ">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <img class="w-100 img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h5 class="text-light">{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
