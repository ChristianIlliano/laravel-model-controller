@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row g-3">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="ms_card h-100">
                            <img src="{{ $movie['image'] }}" alt="">
                            <div class="ms_card-body">
                                <p>
                                    {{ $movie['name'] }}
                                </p>
                                <p>
                                    {{ $movie['original_title'] }}
                                </p>
                                <p>
                                    {{ $movie['nationality'] }}
                                </p>
                                <p>
                                    {{ $movie['date'] }}
                                </p>
                                <p>
                                    {{ $movie['vote'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection