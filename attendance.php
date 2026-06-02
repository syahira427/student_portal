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
<title>Attendance</title>

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
<a class="nav-link nav-pill active" href="attendance.php">Attendance</a>
<a class="nav-link nav-pill" href="subjects.php">Subject</a>
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
<div class="card p-4 mb-4 stat-card">
    <h2 class="fw-bold">Attendance Tracking</h2>
    
</div>

<!-- FILTER -->
<div class="d-flex justify-content-between flex-wrap gap-3 mb-3">

<input type="text" id="searchInput" class="form-control search-box"
placeholder="Search student..." onkeyup="filterTable()">

<div class="d-flex gap-2 flex-wrap">
<button class="btn btn-sm btn-filter active" onclick="setFilter('all')">All</button>
<button class="btn btn-sm btn-filter" onclick="setFilter('present')">Present</button>
<button class="btn btn-sm btn-filter" onclick="setFilter('late')">Late</button>
<button class="btn btn-sm btn-filter" onclick="setFilter('absent')">Absent</button>
</div>

</div>

<!-- TABLE -->
<div class="card p-3">
<div class="table-responsive">

<table class="table align-middle" id="table">

<thead>
<tr>
<th>Date</th>
<th>Student</th>
<th>Time</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr data-status="present">
<td>2026-06-01</td>
<td>Ahmad Fauzi</td>
<td>08:05 AM</td>
<td><span class="badge-present">Present</span></td>
</tr>

<tr data-status="late">
<td>2026-06-01</td>
<td>Siti Aminah</td>
<td>08:15 AM</td>
<td><span class="badge-late">Late</span></td>
</tr>

<tr data-status="absent">
<td>2026-06-01</td>
<td>Nurul Huda</td>
<td>-</td>
<td><span class="badge-absent">Absent</span></td>
</tr>

</tbody>

</table>

</div>
</div>

</div>

<!-- FOOTER -->
<footer class="footer text-center">
© 2026 Student Attendance System | IMS566
</footer>

<!-- JS -->
<script>
let currentFilter = "all";

function setFilter(type){
    currentFilter = type;

    document.querySelectorAll(".btn-filter").forEach(b=>{
        b.classList.remove("active");
    });

    event.target.classList.add("active");
    filterTable();
}

function filterTable(){
    let input = document.getElementById("searchInput").value.toLowerCase();
    let rows = document.querySelectorAll("#table tbody tr");

    rows.forEach(row=>{
        let name = row.children[1].textContent.toLowerCase();
        let status = row.getAttribute("data-status");

        let matchSearch = name.includes(input);
        let matchFilter = (currentFilter === "all" || currentFilter === status);

        row.style.display = (matchSearch && matchFilter) ? "" : "none";
    });
}
</script>

</body>
</html>