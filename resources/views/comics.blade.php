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
            <div class="btn-container d-flex justify-content-center">
                <button type="button" class="comics-btn">Load More</button>
            </div>
        </div>
        <div class="comics-bottom">
            <div class="container">
                <ul class="d-flex align-items-center">
                    <li>
                        <img src="{{ Vite::asset('resources\img\buy-comics-digital-comics.png') }}" alt="digital-comics">
                        <div class="comics-text-container">
                            <span>DIGITAL COMICS</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources\img\buy-comics-merchandise.png') }}" alt="digital-comics">
                        <span>DC MERCHANDISE</span>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources\img\buy-comics-subscriptions.png') }}"
                            alt="comics-subscriptions">
                        <span>SUBSCRIPTION</span>
                    </li>
                    <li>
                        <img class="img-big" src="{{ Vite::asset('resources\img\buy-comics-shop-locator.png') }}"
                            alt="shop-locator">
                        <span>COMIC SHOP LOCATOR</span>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources\img\buy-dc-power-visa.svg') }}" alt="power-visa">
                        <span>DC POWER VISA</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
