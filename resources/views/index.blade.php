@extends("layouts.master")

@section('content')

<h1 class="text-center fw-bold mb-5">MOVIES</h1>

<div class="row row-cols-4 g-3">

    @foreach ($movies as $movie)
   
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{$movie["title"]}}</h5>
                <h6 class="card-subtitle">{{$movie["original_title"]}}</h6>
                <hr>
                    <p class="card-text">
                        {{$movie["nationality"]}}
                    </p>
                    <p class="card-text">{{$movie["date"]}}</p>
                    
                    <p class="card-text text-end">{{$movie["vote"]}} <i class="fa-solid fa-star"></i></p>
            </div>
        </div>
    </div>
    
    @endforeach

</div>

@endsection


