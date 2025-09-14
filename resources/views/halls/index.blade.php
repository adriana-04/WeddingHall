@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Wedding Halls</h2>
    <a href="{{ route('wedding-halls.create') }}" class="btn btn-primary">Add Hall</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hall Name</th>
                <th>Location</th>
                <th>Capacity</th>
                <th>Price</th>
                <th>Owner</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($weddingHalls as $hall)
            <tr>
                <td>{{ $hall->id }}</td>
                <td>{{ $hall->name }}</td>
                <td>{{ $hall->location }}</td>
                <td>{{ $hall->capacity }}</td>
                <td>{{ $hall->price }}</td>
                <td>{{ $hall->owner->name ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('wedding-halls.edit', $hall->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('wedding-halls.destroy', $hall->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete this hall?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
