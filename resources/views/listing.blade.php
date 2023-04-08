@extends('layout')

@section('content')

    id: {{$listing["id"]}} <br>
    title: {{$listing["title"]}} <br>
    tags: {{$listing["tags"]}} <br>
    company: {{$listing["company"]}} <br>
    location: {{$listing["location"]}} <br>
    email: {{$listing["email"]}} <br>
    description: {{$listing["description"]}}

@endsection
