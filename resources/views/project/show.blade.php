@extends('layouts.layout')

@section('content')
    <h2>{{ $project['name'] }}</h2>
    <div >
        <img src="{{ $project['cover_image'] }}" class="img-fluid w-50" alt="">
    </div>
    <h4 class="mt-4">Nome progetto: {{ $project['name'] }} </h4>
    <p>Descrizione: {{ $project['description'] }}</p>
    <p>Data di creazione: {{ $project['creation_date'] }}</p>
@endsection
