@extends('guest.layout.base')

@section('content')

    
        @foreach ($movies as $movie)
        
            
            <h1>{{$movie->title}}</h1> 
        
        @endforeach
    
            

    
@endsection