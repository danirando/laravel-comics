@extends ('layouts.master')
@section('content') 
@php
    $comics = config('comics');


@endphp
<main>
    <div class="hero-section">
        <div class="container">
          <div class="current-series">CURRENT SERIES</div>   
        </div>
    </div>
    <div class="series-container">
        <div class="card-container container">
        
            <div class="row row-cols-6 g-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <x-card>
                            <x-slot name="img">{{ $comic['thumb'] }}</x-slot>
                            <x-slot name="title">{{ $comic['series'] }}</x-slot>
                        </x-card>
                    </div>
                @endforeach
            </div> 
            <div class="container d-flex justify-content-center"> 
                 <button class="load-more">LOAD MORE</button>
            </div>
          
        </div>
    </div>   
</main>
    


@endsection