@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Feature</h1>
    <form action="{{ route('features.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" required>
        </div>
        <div class="form-group">
            <label for="details">Details (JSON)</label>
            <textarea class="form-control" id="details" name="details" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="read_more_link">Read More Link</label>
            <input type="url" class="form-control" id="read_more_link" name="read_more_link">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection