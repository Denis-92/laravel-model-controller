@foreach ($movies as $movie)
    <div>
        <p>{{ $movie['title'] }}</p>
        <p>{{ $movie['vote'] }}</p>
    </div>
@endforeach
