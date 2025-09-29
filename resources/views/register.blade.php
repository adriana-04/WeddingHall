<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-lg" style="width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Registration Account</h3>

            <form action="#" method="POST">
                @csrf

                <!-- Full Name -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fullName" placeholder="John Doe">
                    <label for="fullName">Full Name</label>
                </div>

                <!-- Last Name -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Smith">
                    <label for="lastName">Last Name</label>
                </div>

                <!-- Username -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" placeholder="johndoe">
                    <label for="username">Username</label>
                </div>

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <!-- Confirm Password -->
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                    <label for="confirmPassword">Confirm Password</label>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
