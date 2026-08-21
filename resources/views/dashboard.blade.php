<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - AdminLTE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; }
      
      body {
        background: #e4f1f9;
        min-height: 100vh;
        color: #1e3a8a;
        padding: 20px 30px 120px 30px;
        display: flex;
        justify-content: center;
      }

      .wrapper {
        width: 100%;
        max-width: 1400px;
      }

      /* TOP HEADER */
      .top-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }

      .brand {
        font-size: 1.35rem;
        font-weight: 800;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .brand i { color: #38bdf8; }

      .active-schedule-badge {
        background: #e2f8eb;
        color: #16a34a;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .active-schedule-badge .dot {
        width: 8px;
        height: 8px;
        background: #22c55e;
        border-radius: 50%;
      }

      /* MAIN TITLE CARD */
      .title-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 22px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.03);
        border-left: 6px solid #38bdf8;
      }

      .title-card h2 {
        font-size: 1.4rem;
        color: #0f172a;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .title-card p {
        color: #64748b;
        font-size: 0.88rem;
        margin-top: 4px;
        font-weight: 600;
      }

      .jp-btn {
        background: #38bdf8;
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 6px;
      }

      /* STATS CARDS GRID */
      .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        margin-bottom: 25px;
      }

      .stat-card {
        background: rgba(255, 255, 255, 0.65);
        backdrop-filter: blur(8px);
        border-radius: 20px;
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
      }

      .stat-info h3 {
        font-size: 1.8rem;
        font-weight: 800;
        color: #0f172a;
      }

      .stat-info p {
        font-size: 0.85rem;
        color: #64748b;
        font-weight: 600;
        margin-top: 2px;
      }

      .stat-icon {
        width: 50px;
        height: 50px;
        background: #e0f2fe;
        color: #0284c7;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
      }

      /* CONTENT SECTION GRID */
      .content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 18px;
      }

      .panel-box {
        background: rgba(255, 255, 255, 0.65);
        backdrop-filter: blur(8px);
        border-radius: 20px;
        padding: 22px;
        border: 1px solid rgba(255, 255, 255, 0.8);
      }

      .panel-header {
        font-size: 1.1rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .panel-body p {
        color: #475569;
        font-size: 0.9rem;
        line-height: 1.6;
        font-weight: 500;
      }

      .info-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 10px;
      }

      .info-item {
        background: #ffffff;
        border-radius: 14px;
        padding: 12px 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .info-item span {
        font-size: 0.85rem;
        font-weight: 700;
        color: #0f172a;
      }

      .info-item small {
        color: #0284c7;
        font-weight: 700;
        background: #e0f2fe;
        padding: 4px 10px;
        border-radius: 10px;
      }

      /* FLOATING BOTTOM ISLAND NAVIGATION (EXACT MATCH) */
      .floating-nav {
        position: fixed;
        bottom: 25px;
        left: 50%;
        transform: translateX(-50%);
        background: #eef7fc;
        border-radius: 50px;
        padding: 8px 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.8);
        z-index: 1000;
      }

      .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #3b6b88;
        padding: 10px 20px;
        border-radius: 28px;
        transition: all 0.2s ease-in-out;
        min-width: 80px;
      }

      .nav-item i {
        font-size: 1.35rem;
        margin-bottom: 3px;
        color: #3b6b88;
      }

      .nav-item span {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: -0.2px;
      }

      /* STATE AKTIF DENGAN BACKGROUND KAPSUL BIRU */
      .nav-item.active {
        background: #7bd0ff;
        color: #0b2f43;
      }

      .nav-item.active i {
        color: #0b2f43;
      }

      .nav-item:hover:not(.active) {
        background: rgba(255, 255, 255, 0.5);
        color: #0284c7;
      }

      .nav-item:hover:not(.active) i {
        color: #0284c7;
      }

      @media (max-width: 1024px) {
        .stats-grid { grid-template-columns: repeat(2, 1fr); }
        .content-grid { grid-template-columns: 1fr; }
      }
      @media (max-width: 600px) {
        .stats-grid { grid-template-columns: 1fr; }
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <!-- TOP HEADER -->
      <div class="top-nav">
        <div class="brand">
          <i class="bi bi-cloud-fill"></i> AdminLTE Dashboard
        </div>
        <div class="active-schedule-badge">
          <span class="dot"></span> XII RPL 2 • Active Schedule
        </div>
      </div>

      <!-- MAIN TITLE BAR -->
      <div class="title-card">
        <div>
          <h2><i class="bi bi-grid-fill" style="color: #0284c7;"></i> Dashboard Utama XII RPL 2</h2>
          <p>Ringkasan Informasi & Aktivitas Kelas Hari Ini</p>
        </div>
        <div class="jp-btn">
          <i class="bi bi-person-circle"></i> Admin Mode
        </div>
      </div>

      <!-- STATS GRID CARDS -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-info">
            <h3>36</h3>
            <p>Total Siswa</p>
          </div>
          <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
        </div>
        <div class="stat-card">
          <div class="stat-info">
            <h3>12</h3>
            <p>Mata Pelajaran</p>
          </div>
          <div class="stat-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
        </div>
        <div class="stat-card">
          <div class="stat-info">
            <h3>48 JP</h3>
            <p>Total Jam / Minggu</p>
          </div>
          <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
        </div>
        <div class="stat-card">
          <div class="stat-info">
            <h3>100%</h3>
            <p>Presensi Kelas</p>
          </div>
          <div class="stat-icon"><i class="bi bi-check-circle-fill"></i></div>
        </div>
      </div>

      <!-- CONTENT SECTION -->
      <div class="content-grid">
        <div class="panel-box">
          <div class="panel-header">
            <i class="bi bi-megaphone-fill" style="color: #0284c7;"></i> Pengumuman Kelas
          </div>
          <div class="panel-body">
            <p>
              Selamat datang di portal informasi XII RPL 2. Jadwal pelajaran, pembagian kelompok praktikum, dan daftar penugasan dapat diakses secara langsung melalui menu navigasi melayang di bawah.
            </p>
          </div>
        </div>

        <div class="panel-box">
          <div class="panel-header">
            <i class="bi bi-info-circle-fill" style="color: #0284c7;"></i> Status Sistem
          </div>
          <div class="info-list">
            <div class="info-item">
              <span>Framework</span>
              <small>Laravel v13</small>
            </div>
            <div class="info-item">
              <span>UI Theme</span>
              <small>AdminLTE Soft Blue</small>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <!-- FLOATING BOTTOM ISLAND NAVIGATION -->
    <div class="floating-nav">
      <a href="/login" class="nav-item">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
      <a href="/kelompok" class="nav-item">
        <i class="bi bi-people-fill"></i>
        <span>Team</span>
      </a>
      <a href="/dashboard" class="nav-item active">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
      </a>
      <a href="/jadwal" class="nav-item">
        <i class="bi bi-calendar-event-fill"></i>
        <span>Jadwal</span>
      </a>
      <a href="/tasks" class="nav-item">
        <i class="bi bi-check2-square"></i>
        <span>Tasks</span>
      </a>
    </div>

  </body>
</html>