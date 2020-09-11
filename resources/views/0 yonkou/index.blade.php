@extends('0 yonkou.layout.layout')

@section('content')
    <div class="row">
        @foreach ($sites as $site)
            <div class="col-md-3 mb-2">
                <a href="{{ $site->link }}" target="_blank">
                    <div class="card text-left">
                        {{-- @if ($site->logo)
                            <img class="card-img-top" src="{{ $site->logo }}" alt="">
                        @else
                            <img class="card-img-top" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fhamiltonrising.com%2Fartist-of-the-week-geoff-hudson-band%2Fwebsite-logo-png%2F&psig=AOvVaw3GQ27iG3XLXUdJw3xsg24M&ust=1599904711430000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLDDrdfr4OsCFQAAAAAdAAAAABAD" alt="">
                        @endif --}}
                        <div class="card-body">
                            <h4 class="card-title">{{ $site->name }}</h4>
                            <p class="card-text">{{ $site->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
@endsection
