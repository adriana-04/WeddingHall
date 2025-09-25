<!DOCTYPE html>
<html>
<head>
    <title>User Registration & Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1 class="mb-4 text-center">👤 User Registration & Management</h1>

    <!-- Notification -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow p-4 mb-4">
        <h3 class="mb-3">
            {{ isset($editUser) ? '✏️ Edit User' : '📝 Register New User' }}
        </h3>

        <form method="POST" 
              action="{{ isset($editUser) ? route('users.update', $editUser->id) : route('users.store') }}">
            @csrf
            @if(isset($editUser))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $editUser->name ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $editUser->email ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="password" class="form-control"
                       placeholder="{{ isset($editUser) ? 'Leave blank to keep current' : '' }}">
            </div>

            <div class="d-flex gap-2">
                @if(isset($editUser))
                    <button type="submit" class="btn btn-warning">Update</button>
                @else
                    <button type="submit" class="btn btn-success">Register</button>
                @endif
            </div>
        </form>

        @if(isset($editUser))
            <form method="POST" action="{{ route('users.destroy', $editUser->id) }}" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete User</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        @endif
    </div>

    <!-- User Table -->
    <div class="card shadow p-4">
        <h3 class="mb-3">📋 Existing Users</h3>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.index', ['edit' => $user->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
