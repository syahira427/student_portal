<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subject Registration</title>

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
<a class="nav-link nav-pill active" href="subjects.php">Subject</a>
<a class="nav-link nav-pill" href="profile.php">Profile</a>

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
<div class="top-card mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
<div>
    <h2 class="fw-bold mb-1">Subject Registration</h2>
    <p class="mb-0 opacity-75">
        View and manage your enrolled subjects for this semester
    </p>
</div>
<input type="text" id="searchInput" class="form-control search-box"
placeholder="Search subject..." onkeyup="filterCourses()">

</div>

<!-- STATS -->
<div class="row g-4 mb-4">

<div class="col-md-4">
<div class="card p-4 stat-card text-white">
<h6>Total Subjects</h6>
<h2 class="fw-bold">6</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<h6>Registered</h6>
<h2 class="fw-bold text-success" id="enrolledCount">0</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<h6>Status</h6>
<h2 class="fw-bold">Active</h2>
</div>
</div>

</div>

<!-- SUBJECT LIST -->
<div class="row g-4">

<!-- COURSE 1 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>Information Management</h5>
<p class="text-muted small">Metadata, data systems & digital management</p>
<span class="course-badge">IMS566</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

<!-- COURSE 2 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>Business Computing</h5>
<p class="text-muted small">Business systems & IT applications</p>
<span class="course-badge">IMS565</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

<!-- COURSE 3 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>Database Systems</h5>
<p class="text-muted small">SQL & relational database design</p>
<span class="course-badge">IMS564</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

<!-- COURSE 4 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>Web Development</h5>
<p class="text-muted small">HTML, CSS, JavaScript & Bootstrap</p>
<span class="course-badge">IMS567</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

<!-- COURSE 5 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>System Analysis</h5>
<p class="text-muted small">Requirement analysis & system design</p>
<span class="course-badge">IMS561</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

<!-- COURSE 6 -->
<div class="col-md-4 course-item">
<div class="card course-card p-4">
<h5>IT Security</h5>
<p class="text-muted small">Cybersecurity basics & protection</p>
<span class="course-badge">IMS563</span>
<div class="mt-3 d-flex gap-2">
<button class="btn btn-success btn-sm" onclick="enroll(this)">Register</button>
<button class="btn btn-outline-danger btn-sm" onclick="drop(this)">Remove</button>
</div>
</div>
</div>

</div>

</div>

<!-- FOOTER -->
<footer class="footer text-center">
© 2026 Student Attendance System | IMS566
</footer>

<script>
let enrolled = 0;

function enroll(btn){
    if(!btn.classList.contains("disabled")){
        btn.classList.add("disabled");
        btn.innerText = "Registered";
        enrolled++;
        document.getElementById("enrolledCount").innerText = enrolled;
    }
}

function drop(btn){
    let card = btn.closest(".course-item");
    let enrollBtn = card.querySelector(".btn-success");

    if(enrollBtn.classList.contains("disabled")){
        enrollBtn.classList.remove("disabled");
        enrollBtn.innerText = "Register";
        enrolled--;
        document.getElementById("enrolledCount").innerText = enrolled;
    }
}

function filterCourses(){
    let input = document.getElementById("searchInput").value.toLowerCase();
    let items = document.querySelectorAll(".course-item");

    items.forEach(item=>{
        let title = item.querySelector("h5").textContent.toLowerCase();
        item.style.display = title.includes(input) ? "" : "none";
    });
}
</script>

</body>
</html>