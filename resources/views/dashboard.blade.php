<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - XII RPL 2 AdminLTE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
      body { background: #f4f6f9; color: #333; display: flex; min-height: 100vh; }

      /* SIDEBAR KIRI */
      .sidebar { width: 250px; background: #343a40; color: #fff; flex-shrink: 0; display: flex; flex-direction: column; }
      .sidebar .brand { padding: 20px; font-size: 1.2rem; font-weight: bold; background: #212529; display: flex; align-items: center; gap: 10px; border-bottom: 1px solid #4b545c; }
      .sidebar-menu { list-style: none; padding: 15px 0; }
      .sidebar-menu a { display: flex; align-items: center; gap: 12px; padding: 12px 20px; color: #c2c7d0; text-decoration: none; font-size: 0.95rem; transition: 0.2s; }
      .sidebar-menu a:hover, .sidebar-menu a.active { background: #007bff; color: #fff; }

      /* CONTENT AREA */
      .main-content { flex-grow: 1; display: flex; flex-direction: column; }
      .topbar { background: #fff; padding: 15px 25px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
      .content { padding: 25px; }

      /* CARDS GRID */
      .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 25px; }
      .card-box { background: #fff; border-radius: 8px; padding: 20px; border: 1px solid #e2e8f0; box-shadow: 0 2px 4px rgba(0,0,0,0.05); display: flex; align-items: center; justify-content: space-between; }
      .card-box i { font-size: 2.5rem; color: #007bff; }
      .card-box h4 { font-size: 1.8rem; color: #1e293b; }
      .card-box p { font-size: 0.85rem; color: #64748b; margin-top: 4px; }

      /* PANELS */
      .glass-panel { background: #fff; border-radius: 8px; border: 1px solid #e2e8f0; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 20px; }
      .panel-title { font-size: 1rem; font-weight: bold; color: #1e293b; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
      .status-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 10px; }
      .status-card { background: #f8fafc; border: 1px solid #e2e8f0; padding: 12px; border-radius: 6px; }
      .status-card small { color: #64748b; font-size: 0.75rem; font-weight: bold; }
      .status-card p { color: #007bff; font-weight: bold; font-size: 0.95rem; margin-top: 4px; }

      .btn-logout { background: #dc3545; color: #fff; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 600; }
      .btn-logout:hover { background: #bd2130; }
    </style>
  </head>
  <body>

    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="brand"><i class="bi bi-cloud-fill"></i> XII RPL 2 AdminLTE</div>
      <ul class="sidebar-menu">
        <li><a href="/dashboard" class="active"><i class="bi bi-grid-fill"></i> Dashboard</a></li>
        <li><a href="/kelompok"><i class="bi bi-people-fill"></i> Kelompok</a></li>
        <li><a href="/jadwal"><i class="bi bi-calendar-event-fill"></i> Jadwal</a></li>
        <li><a href="/tasks"><i class="bi bi-check2-square"></i> Tasks</a></li>
      </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="topbar">
        <h3>Dashboard Overview</h3>
        <a href="/logout" class="btn-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>

      <div class="content">
        <div class="cards-grid">
          <div class="card-box">
            <div>
              <h4>36</h4>
              <p>Total Siswa RPL 2</p>
            </div>
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="card-box">
            <div>
              <h4>12</h4>
              <p>Mata Pelajaran</p>
            </div>
            <i class="bi bi-journal-bookmark-fill"></i>
          </div>
          <div class="card-box">
            <div>
              <h4>5</h4>
              <p>Tugas Aktif</p>
            </div>
            <i class="bi bi-list-task"></i>
          </div>
          <div class="card-box">
            <div>
              <h4>100%</h4>
              <p>Presensi Kelas</p>
            </div>
            <i class="bi bi-award-fill"></i>
          </div>
        </div>

        <div class="glass-panel" style="border-left: 4px solid #007bff;">
          <div class="panel-title"><i class="bi bi-megaphone-fill" style="color: #007bff;"></i> Pengumuman Utama Kelas</div>
          <p style="font-size: 0.9rem; color: #475569; line-height: 1.5;">
            Selamat datang di Sistem Informasi XII RPL 2! Semua modul praktikum, jadwal pelajaran mingguan, dan penugasan kelompok telah diperbarui. Silakan manfaatkan menu navigasi di sebelah kiri.
          </p>
        </div>

        <div class="glass-panel" style="border-left: 4px solid #28a745;">
          <div class="panel-title"><i class="bi bi-cpu-fill" style="color: #28a745;"></i> Status Lingkungan Kerja (Environment)</div>
          <div class="status-grid">
            <div class="status-card">
              <small>WEB SERVER</small>
              <p><i class="bi bi-hdd-network-fill"></i> PHP Artisan Serve (Port 8000)</p>
            </div>
            <div class="status-card">
              <small>FRAMEWORK VERSION</small>
              <p><i class="bi bi-layers-fill"></i> Laravel v13 Modern UI</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>