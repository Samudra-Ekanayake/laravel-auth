@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('project.store') }}" class="p-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="creation_date" class="form-label">Cration date</label>
            <input type="text" class="form-control" name="creation_date" id="creation_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
