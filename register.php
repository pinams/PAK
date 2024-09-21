<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css"> <!-- Added link to main.css -->
    <style>
        body {
            display: flex; /* Centering the content */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-button {
            background-color: #37517e; /* Changed to match login button */
            border-color: #37517e;
            color: white; /* Changed to white for register button text */
        }
        .container {
            max-width: 400px; /* Set max-width to 400px for a more normal size */
        }
        .form-group {
            margin-bottom: 1.5rem; /* Increased margin-bottom for a more normal size */
        }
        .form-control {
            padding: 0.375rem 0.75rem; /* Adjusted padding for a more normal size */
            font-size: 1rem; /* Set font-size to 1rem for a more normal size */
        }
        .btn {
            font-size: 1rem; /* Set font-size to 1rem for a more normal size */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="assets/img/logo.png" alt="Logo" class="mb-4" style="width: 35%; height: auto;"> <!-- Replaced heading with logo image -->
        </div>
        <?php
        if (isset($_GET['message'])) {
            echo "<div class='alert alert-warning'>{$_GET['message']}</div>";
        }
        ?>
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn register-button btn-block">Daftar</button> <!-- Changed class to register-button -->
        </form>
        <p class="text-center mt-3">Sudah terdaftar? <a href="login.php" style="color: #37517e;">Login Sekarang</a></p> <!-- Added login link -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();
                // Simulate a successful registration attempt
                if (true) { // Assuming registration is successful
                    alert("Registrasi berhasil! Silakan login.");
                    window.location.href = 'login.php';
                }
            });
        });
    </script>
</body>
</html>
