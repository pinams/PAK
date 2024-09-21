B<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-button {
            background-color: #37517e;
            border-color: #37517e;
            color: white; /* Changed to white for login button text */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/img/logo.png" alt="Logo" class="mb-4" style="width: 35%; height: auto;">
                </div>
                <form action="login_process.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn login-button btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Belum terdaftar? <a href="register.php" style="color: #37517e;">Daftar Sekarang</a></p> <!-- Changed to #37517e for register link text -->
                <div id="error-popup" class="alert alert-danger" style="display: none;">
                    <strong>Error!</strong> Password salah. Silakan coba lagi.
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();
                // Simulate a failed login attempt
                if (document.getElementById('password').value !== 'password123') {
                    document.getElementById('error-popup').style.display = 'block';
                    setTimeout(function() {
                        document.getElementById('error-popup').style.display = 'none';
                    }, 3000);
                } else {
                    this.submit();
                }
            });
        });
    </script>
</body>
</html>
