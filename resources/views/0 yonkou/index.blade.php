@extends('0 yonkou.layout.layout')

@section('content')
    <div class="row">
        @foreach ($sites as $site)
            <div class="col-md-3 mb-2">
                <a href="{{ $site->link }}" target="_blank">
                    <div class="card text-left">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
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
