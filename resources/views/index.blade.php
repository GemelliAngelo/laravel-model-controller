@foreach ($movies as $movie)
    <ul>
        <li>{{$movie["title"]}}</li>
        <li>{{$movie["original_title"]}}</li>
        <li>{{$movie["nationality"]}}</li>
        <li>{{$movie["vote"]}}</li>
    </ul>
@endforeach