<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - XII RPL 2</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <style>
    .floating-nav {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(30, 41, 59, 0.85);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 30px;
      padding: 8px 16px;
      display: flex;
      align-items: center;
      gap: 12px;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }
    .floating-nav .nav-item {
      color: #94a3b8;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
    }
    .floating-nav .nav-item:hover { color: #ffffff; background: rgba(255, 255, 255, 0.1); }
    .floating-nav .nav-item.active { color: #ffffff; background: #0284c7; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.4); }
  </style>
</head>
<body class="hold-transition layout-top-nav bg-dark">
<div class="wrapper">

  <div class="content-wrapper bg-transparent py-4 mb-5">
    <div class="content">
      <div class="container">
        
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="text-white font-weight-bold">
              <i class="bi bi-grid-fill text-info mr-2"></i> Dashboard Utama
            </h2>
            <p class="text-muted">Ringkasan Aktivitas dan Informasi Kelompok</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5</h3>
                <p>Anggota Kelompok</p>
              </div>
              <div class="icon"><i class="fas fa-users"></i></div>
              <a href="/kelompok" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5</h3>
                <p>Hari Sekolah</p>
              </div>
              <div class="icon"><i class="fas fa-calendar-alt"></i></div>
              <a href="/jadwal" class="small-box-footer">Jadwal Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 class="text-white">4</h3>
                <p class="text-white">Pending Tasks</p>
              </div>
              <div class="icon"><i class="fas fa-tasks"></i></div>
              <a href="/tasks" class="small-box-footer text-white">Kelola Task <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>100%</h3>
                <p>Projek Selesai</p>
              </div>
              <div class="icon"><i class="fas fa-check-circle"></i></div>
              <a href="#" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- FLOATING NAVIGATION -->
  <div class="floating-nav">
    <a href="/login" class="nav-item"><i class="bi bi-box-arrow-in-right"></i><span>Login</span></a>
    <a href="/kelompok" class="nav-item"><i class="bi bi-people-fill"></i><span>Team</span></a>
    <a href="/dashboard" class="nav-item active"><i class="bi bi-grid-fill"></i><span>Dashboard</span></a>
    <a href="/jadwal" class="nav-item"><i class="bi bi-calendar-event-fill"></i><span>Jadwal</span></a>
    <a href="/tasks" class="nav-item"><i class="bi bi-check2-square"></i><span>Tasks</span></a>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>