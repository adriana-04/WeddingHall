@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Hall</h2>

    <form action="{{ route('wedding-halls.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Hall Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Capacity</label>
            <input type="number" name="capacity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Owner</label>
            <select name="owner_id" class="form-control" required>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('wedding-halls.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
