@extends('layouts.app')

@section('content')
<div class="movies_content">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.istockphoto.com/id/1191001701/photo/popcorn-and-clapperboard.jpg?s=612x612&w=0&k=20&c=iUkFTVuU8k-UCcZDxczTWs6gkRa0nAMihp2Jf_2ASKM=" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->original_title}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection