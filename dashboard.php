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
<title>Dashboard - Student Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

<!-- extra mini enhancement -->
<style>
.chart-box{
    height: 240px;
}

.card{
    transition: 0.25s;
}

.card:hover{
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}
</style>

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
<a class="nav-link active" href="dashboard.php">Dashboard</a>
<a class="nav-link" href="students.php">Students</a>
<a class="nav-link" href="attendance.php">Attendance</a>
<a class="nav-link" href="courses.php">Subject</a>
<a class="nav-link" href="profile.php">Profile</a>

<a class="nav-link text-danger fw-semibold ms-lg-3" href="logout.php">
<i class="bi bi-box-arrow-right me-1"></i>Logout
</a>
</div>

</div>
</div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">

<!-- HEADER -->
<div class="mb-4">
    <h3 class="fw-bold">Dashboard Overview</h3>
</div>

<!-- STATS -->
<div class="row g-4 mb-3">

<div class="col-md-4">
<div class="card stat-card p-3">
<h6>Total Students</h6>
<h3 class="fw-bold">120</h3>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h6>Attendance Rate</h6>
<h3 class="fw-bold text-success">92%</h3>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h6>Total Subject</h6>
<h3 class="fw-bold">6</h3>
</div>
</div>

</div>

<!-- CHARTS (COMPACT 2x2 GRID) -->
<div class="row g-4">

<!-- LINE -->
<div class="col-md-6">
<div class="card p-3">
<h6 class="fw-bold mb-2">Weekly Trend</h6>
<div class="chart-box">
<canvas id="lineChart"></canvas>
</div>
</div>
</div>

<!-- PIE -->
<div class="col-md-6">
<div class="card p-3">
<h6 class="fw-bold mb-2">Attendance Breakdown</h6>
<div class="chart-box">
<canvas id="pieChart"></canvas>
</div>
</div>
</div>

<!-- BAR -->
<div class="col-md-6">
<div class="card p-3">
<h6 class="fw-bold mb-2">By Subject</h6>
<div class="chart-box">
<canvas id="barChart"></canvas>
</div>
</div>
</div>

<!-- NEW MONTHLY -->
<div class="col-md-6">
<div class="card p-3">
<h6 class="fw-bold mb-2">Monthly Progress</h6>
<div class="chart-box">
<canvas id="monthlyChart"></canvas>
</div>
</div>
</div>

</div>

</div>

<!-- FOOTER -->
<footer class="footer text-center">
<small>© 2026 Student Attendance System | IMS566</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
new Chart(document.getElementById('lineChart'), {
type: 'line',
data: {
labels: ['Mon','Tue','Wed','Thu','Fri'],
datasets: [{
data: [94,89,93,86,97],
borderColor: '#059669',
backgroundColor: 'rgba(16,185,129,0.2)',
fill: true,
tension: 0.4
}]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins:{legend:{display:false}},
scales:{y:{min:80,max:100}}
}
});

new Chart(document.getElementById('pieChart'), {
type: 'pie',
data: {
labels:['Present','Late','Absent'],
datasets:[{
data:[85,10,5],
backgroundColor:['#059669','#34d399','#ef4444']
}]
},
options:{responsive:true,maintainAspectRatio:false}
});

new Chart(document.getElementById('barChart'), {
type: 'bar',
data: {
labels:['IMS566','IMS565','IMS564','IMS567'],
datasets:[{
data:[92,88,95,90],
backgroundColor:'#10b981',
borderRadius:6
}]
},
options:{
responsive:true,
maintainAspectRatio:false,
plugins:{legend:{display:false}},
scales:{y:{min:80,max:100}}
}
});

new Chart(document.getElementById('monthlyChart'), {
type: 'line',
data: {
labels:['Jan','Feb','Mar','Apr','May','Jun'],
datasets:[{
data:[88,90,85,92,94,96],
borderColor:'#0f766e',
backgroundColor:'rgba(15,118,110,0.15)',
fill:true,
tension:0.4,
pointRadius:4
}]
},
options:{
responsive:true,
maintainAspectRatio:false,
plugins:{legend:{display:false}},
scales:{y:{min:80,max:100}}
}
});
</script>

</body>
</html>