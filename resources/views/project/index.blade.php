@extends('layouts.layout')

@section('content')
    <h1>Project</h1>

@section('content')
    <h1>Projects</h1>

    <div class="row">
        @foreach ($catalogo as $progetti)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $progetti->cover_image }}" alt="Cover image of {{ $progetti->name }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">{{ $progetti->name }}</h3>
                        <p class="card-text">{{ $progetti->description }}</p>
                        <p class="card-text"><small class="text-muted">Creation date: {{ $progetti->creation_date }}</small>
                        </p>
                         <div class="card-footer d-flex justify-content-between p-0">
                            <a href="{{ route('project.show', $progetti->id) }}" class="btn btn-primary">Vai ai dettagli</a>
                            <a href="{{ route('project.edit', $progetti->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('project.destroy', $progetti->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancella</a>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{--  @foreach ($catalogo as $progetti)
        <div class="row">
            <div class="card">
                <img src="{{ $progetti->cover_image }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Project Name: {{ $progetti->name }}</h3>
                    <p class="card-text">Description: {{ $progetti->description }}</p>
                    <p>creation date: {{ $progetti->creation_date }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
 --}}
