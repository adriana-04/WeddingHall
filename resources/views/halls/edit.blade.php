@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Hall</h2>

    <form action="{{ route('wedding-halls.update', $hall->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Hall Name</label>
            <input type="text" name="name" value="{{ $hall->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" value="{{ $hall->location }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Capacity</label>
            <input type="number" name="capacity" value="{{ $hall->capacity }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" value="{{ $hall->price }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Owner</label>
            <select name="owner_id" class="form-control" required>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}" {{ $hall->owner_id == $owner->id ? 'selected' : '' }}>
                        {{ $owner->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('wedding-halls.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
