<?php
session_start();

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234") {
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid ID or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IMS566 Individual Project - Student Attendance System Login">
    <meta name="author" content="UiTM Student">
    <title>Student Login - Attendance System</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container-fluid p-0">
    <div class="row g-0">

        <!-- LEFT LOGIN -->
        <div class="col-md-5 login-section">
            <div class="login-card">

                <div class="mb-4">
                    <div class="icon-box mb-3">
                        <i class="bi bi-shield-lock-fill fs-2 text-success"></i>
                    </div>
                    <h2 class="fw-bold">Student Portal</h2>
                    <p class="text-muted small">Please login to continue</p>
                </div>

                <!-- LOGIN FORM (PHP POST) -->
                <form method="POST">

                    <!-- STUDENT ID -->
                    <div class="mb-3">
                        <label class="form-label small">Student ID</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your student ID" required>
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-4">
                        <label class="form-label small">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <!-- ERROR MESSAGE -->
                    <?php if($error != ""): ?>
                        <div class="alert alert-danger py-2">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <!-- LOGIN BUTTON -->
                    <button type="submit" class="btn btn-gradient w-100">
                        Sign In
                    </button>

                </form>

                <p class="text-center mt-3 small">
                    Need account? 
                    <a href="#" onclick="alert('Use ID: admin | Password: 1234')" class="register-link">
                        Register
                    </a>
                </p>

                <div class="mt-4 text-center text-muted small">
                    IMS566 Individual Project © 2026
                </div>

            </div>
        </div>

        <!-- RIGHT WELCOME -->
        <div class="col-md-7 welcome-section">
            <div class="welcome-content text-center">
                <h1>Student Portal</h1>
                <div style="width:60px;height:4px;background:white;margin:15px auto;border-radius:10px;"></div>
                <p class="opacity-75">
                    A smart platform that helps students track attendance and keep up with academic progress.
                </p>
            </div>
        </div>

    </div>
</div>

</body>
</html>