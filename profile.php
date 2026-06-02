<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile - Student Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top py-3">
<div class="container">

<a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="dashboard.php">
<i class="bi bi-mortarboard-fill text-success fs-4"></i>
Student Portal
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">

<div class="navbar-nav ms-auto gap-2">
<a class="nav-link nav-pill" href="dashboard.php">Dashboard</a>
<a class="nav-link nav-pill" href="students.php">Students</a>
<a class="nav-link nav-pill" href="attendance.php">Attendance</a>
<a class="nav-link nav-pill" href="subjects.php">Subject</a>
<a class="nav-link nav-pill active" href="profile.php">Profile</a>

<a class="nav-link text-danger fw-semibold ms-lg-3" href="logout.php">
<i class="bi bi-box-arrow-right me-1"></i>Logout
</a>
</div>

</div>
</div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">

<!-- HEADER -->
<div class="mb-4">
<h2 class="fw-bold">My Profile</h2>
<p class="text-muted">Welcome back, <?php echo $user; ?> — manage your account information</p>
</div>

<div class="row g-4">

<!-- LEFT PROFILE CARD -->
<div class="col-lg-4 col-md-5">

<div class="card p-4 text-center h-100">

<div class="profile-avatar mx-auto mb-3">
<i class="bi bi-person-circle"></i>
</div>

<h5 class="fw-bold mb-1"><?php echo $user; ?></h5>
<p class="text-muted small mb-2">Information Management Student</p>

<span class="course-badge mb-3">Active Student</span>

<hr>

<div class="text-start small mt-3">
<p class="mb-2">
<i class="bi bi-envelope me-2 text-success"></i>
<?php echo $user; ?>@student.uitm.edu.my
</p>

<p class="mb-2">
<i class="bi bi-book me-2 text-success"></i>
IMS566 Program
</p>

<p class="mb-0">
<i class="bi bi-shield-check me-2 text-success"></i>
Verified Account
</p>
</div>

</div>

</div>

<!-- RIGHT SIDE -->
<div class="col-lg-8 col-md-7">

<!-- QUICK STATS -->
<div class="row g-3 mb-4">

<div class="col-md-4">
<div class="card p-3 stat-card text-white text-center">
<h6>Attendance</h6>
<h4 class="fw-bold">92%</h4>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 text-center">
<h6>Courses</h6>
<h4 class="fw-bold text-success">6</h4>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 text-center">
<h6>Status</h6>
<h4 class="fw-bold text-success">Active</h4>
</div>
</div>

</div>

<!-- INFO CARD -->
<div class="card p-4">

<h5 class="fw-bold mb-3">Personal Information</h5>

<div class="row g-3">

<div class="col-md-6">
<label class="form-label text-muted">Full Name</label>
<input type="text" class="form-control" value="<?php echo $user; ?>" disabled>
</div>

<div class="col-md-6">
<label class="form-label text-muted">Email</label>
<input type="text" class="form-control" value="<?php echo $user; ?>@student.uitm.edu.my" disabled>
</div>

<div class="col-md-6">
<label class="form-label text-muted">Role</label>
<input type="text" class="form-control" value="Student" disabled>
</div>

<div class="col-md-6">
<label class="form-label text-muted">Program</label>
<input type="text" class="form-control" value="Information Management" disabled>
</div>

</div>

<hr class="my-4">

<h5 class="fw-bold mb-3">System Activity</h5>

<div class="row g-3">

<div class="col-md-6">
<div class="p-3 bg-light rounded-3">
<p class="mb-1 fw-semibold">Last Login</p>
<p class="text-muted mb-0">Just now</p>
</div>
</div>

<div class="col-md-6">
<div class="p-3 bg-light rounded-3">
<p class="mb-1 fw-semibold">Account Status</p>
<p class="text-success fw-bold mb-0">Active</p>
</div>
</div>

</div>

</div>

</div>

</div>

</div>

<!-- FOOTER -->
<footer class="footer text-center">
<small>© 2026 Student Attendance System | IMS566</small>
</footer>

</body>
</html>