<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jadwal - XII RPL 2</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <style>
    .floating-nav {
      position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
      background: rgba(30, 41, 59, 0.85); backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 30px;
      padding: 8px 16px; display: flex; align-items: center; gap: 12px; z-index: 9999;
    }
    .floating-nav .nav-item { color: #94a3b8; text-decoration: none; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem; display: flex; align-items: center; gap: 8px; }
    .floating-nav .nav-item.active { color: #ffffff; background: #0284c7; }
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
              <i class="bi bi-calendar-event-fill text-info mr-2"></i> Jadwal Pelajaran Mingguan
            </h2>
            <p class="text-muted">Kelas XII RPL 2 - Tahun Ajaran 2026</p>
          </div>
        </div>

        <div class="row">
          <!-- Senin -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card bg-secondary h-100 shadow-sm border-0">
              <div class="card-header bg-info font-weight-bold"><i class="bi bi-calendar-day mr-1"></i> Senin</div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-light float-right">07.00 - 08.00</span><strong>Upacara Bendera</strong></li>
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">08.00 - 12.00</span><strong>Pemrograman Web (PWB)</strong></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Selasa -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card bg-secondary h-100 shadow-sm border-0">
              <div class="card-header bg-info font-weight-bold"><i class="bi bi-calendar-day mr-1"></i> Selasa</div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">07.00 - 10.00</span><strong>Basis Data</strong></li>
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">10.30 - 12.00</span><strong>Matematika</strong></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Rabu -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card bg-secondary h-100 shadow-sm border-0">
              <div class="card-header bg-info font-weight-bold"><i class="bi bi-calendar-day mr-1"></i> Rabu</div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">07.00 - 09.30</span><strong>PBO (Java/OOP)</strong></li>
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">10.00 - 12.00</span><strong>Bahasa Inggris</strong></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Kamis -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card bg-secondary h-100 shadow-sm border-0">
              <div class="card-header bg-info font-weight-bold"><i class="bi bi-calendar-day mr-1"></i> Kamis</div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">07.00 - 10.00</span><strong>PKK (Kewirausahaan)</strong></li>
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">10.30 - 12.00</span><strong>Bahasa Indonesia</strong></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Jumat -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card bg-secondary h-100 shadow-sm border-0">
              <div class="card-header bg-info font-weight-bold"><i class="bi bi-calendar-day mr-1"></i> Jumat</div>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">07.00 - 08.30</span><strong>Pendidikan Agama</strong></li>
                  <li class="list-group-item bg-transparent text-white border-secondary"><span class="badge badge-info float-right">08.30 - 11.00</span><strong>Pendidikan Pancasila</strong></li>
                </ul>
              </div>
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
    <a href="/dashboard" class="nav-item"><i class="bi bi-grid-fill"></i><span>Dashboard</span></a>
    <a href="/jadwal" class="nav-item active"><i class="bi bi-calendar-event-fill"></i><span>Jadwal</span></a>
    <a href="/tasks" class="nav-item"><i class="bi bi-check2-square"></i><span>Tasks</span></a>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>