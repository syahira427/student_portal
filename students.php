<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IMS566 Classmates</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top py-3">
<div class="container">

<a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="dashboard.html">
<i class="bi bi-mortarboard-fill text-success fs-4"></i>
Student Portal
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">

<div class="navbar-nav ms-auto gap-2">
<a class="nav-link nav-pill" href="dashboard.php">Dashboard</a>
<a class="nav-link nav-pill active" href="students.php">Students</a>
<a class="nav-link nav-pill" href="attendance.php">Attendance</a>
<a class="nav-link nav-pill" href="subjects.php">Subject</a>
<a class="nav-link nav-pill" href="profile.php">Profile</a>

<a class="nav-link text-danger fw-semibold ms-lg-3" href="index.php">
<i class="bi bi-box-arrow-right me-1"></i>Logout
</a>
</div>

</div>
</div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">

<!-- HEADER -->
<div class="top-card mb-4 p-4">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

        <div>
            <h2 class="fw-bold mb-1">Classmates Directory</h2>
            <p class="mb-0 opacity-75">
                View and explore students registered in your programme
            </p>
        </div>

        <div class="text-end">
            <span class="course-badge">Active Students</span>
        </div>

    </div>
</div>

<!-- TABLE -->
<div class="card p-4">
<div class="table-responsive">

<table class="table align-middle">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Email</th>
</tr>
</thead>

<tbody>

<tr>
<td class="fw-bold text-success">2025112233</td>
<td>Ahmad Fauzi</td>
<td><span class="course-badge">Information Management</span></td>
<td>fauzi@uitm.edu.my</td>
</tr>

<tr>
<td class="fw-bold text-success">2025116677</td>
<td>Mohamed Rizwan</td>
<td><span class="course-badge">Information Management</span></td>
<td>rizwan@uitm.edu.my</td>
</tr>

<tr>
<td class="fw-bold text-success">2025121002</td>
<td>Daniel Lim</td>
<td><span class="course-badge">Information Management</span></td>
<td>daniel@uitm.edu.my</td>
</tr>

<tr>
<td class="fw-bold text-success">2025122334</td>
<td>Khairul Anuar</td>
<td><span class="course-badge">Information Management</span></td>
<td>khairul@uitm.edu.my</td>
</tr>

<tr>
<td class="fw-bold text-success">2025124556</td>
<td>Sofea Iman</td>
<td><span class="course-badge">Information Management</span></td>
<td>sofea@uitm.edu.my</td>
</tr>

</tbody>

</table>

</div>
</div>

</div>

<!-- FOOTER -->
<footer class="footer text-center">
© 2026 Student Attendance System | IMS566 Individual Project
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>