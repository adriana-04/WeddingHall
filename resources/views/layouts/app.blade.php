<!DOCTYPE html>
<html>
<head>
    <title>Hall Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Hall Booking</a>
            <div>
                <a href="{{ route('users.index') }}" class="nav-link text-light">Users</a>
                <a href="{{ route('wedding-halls.index') }}" class="nav-link text-light">Wedding Halls</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
