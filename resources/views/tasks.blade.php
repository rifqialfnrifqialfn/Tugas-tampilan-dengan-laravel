<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task Tracker - AdminLTE XII RPL 2</title>
    <!-- Favicon -->
    <link rel="icon" href="https://api.iconify.design/bi:cloud-fill.svg?color=%237dc9ec" type="image/svg+xml">
    <!-- Bootstrap Icons & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

     
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        background: radial-gradient(circle at center, #edf6fc 0%, #d4e8f3 100%);
        min-height: 100vh;
        padding-bottom: 120px;
        color: #1a3e54;
      }

      /* TOP HEADER BAR */
      .top-header {
        width: 100%;
        background: rgba(255, 255, 255, 0.65);
        backdrop-filter: blur(16px);
        border-bottom: 1.5px solid rgba(255, 255, 255, 0.8);
        padding: 12px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(27, 86, 118, 0.05);
        margin-bottom: 20px;
      }

      .brand-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 800;
        font-size: 1.2rem;
        color: #0d384d;
      }

      .header-status {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.8);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        color: #2b566e;
        border: 1px solid rgba(255, 255, 255, 0.9);
      }

      .status-dot {
        width: 8px;
        height: 8px;
        background-color: #2ecc71;
        border-radius: 50%;
        box-shadow: 0 0 8px #2ecc71;
      }

      /* MAIN WRAPPER */
      .main-wrapper {
        width: 95%;
        max-width: 1200px;
        margin: 0 auto;
      }

      /* ADMINLTE CALLOUT BOX */
      .adminlte-callout {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(16px);
        border-left: 5px solid #0284c7;
        border-radius: 16px;
        padding: 18px 24px;
        margin-bottom: 25px;
        box-shadow: 0 8px 20px rgba(27, 86, 118, 0.06);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
      }

      .callout-title {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0d384d;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .callout-sub {
        font-size: 0.85rem;
        color: #437691;
        font-weight: 600;
        margin-top: 4px;
      }

      /* ADMINLTE BADGES */
      .lte-badge {
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 4px;
      }
      .badge-success { background: #2ecc71; color: #fff; }
      .badge-warning { background: #f39c12; color: #fff; }
      .badge-danger { background: #e74c3c; color: #fff; }
      .badge-info { background: #38bdf8; color: #fff; }

      /* ADMINLTE TABLE CONTAINER */
      .card-box {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(16px);
        border: 2px solid rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(27, 86, 118, 0.08);
        overflow-x: auto;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
      }

      th {
        padding: 14px;
        font-size: 0.85rem;
        font-weight: 800;
        color: #0d384d;
        border-bottom: 2px solid rgba(0, 0, 0, 0.08);
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }

      td {
        padding: 16px 14px;
        font-size: 0.88rem;
        color: #2b566e;
        border-bottom: 1px solid rgba(0, 0, 0, 0.04);
        vertical-align: middle;
      }

      tr:last-child td {
        border-bottom: none;
      }

      .task-name {
        font-weight: 800;
        color: #0d384d;
        display: block;
      }

      .task-desc {
        font-size: 0.76rem;
        color: #55839c;
        margin-top: 2px;
      }

      /* PROGRESS BAR MINI ADMINLTE */
      .progress-container {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .progress-mini {
        flex: 1;
        height: 8px;
        background: rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        overflow: hidden;
      }

      .progress-bar-fill {
        height: 100%;
        border-radius: 10px;
      }

      .progress-percent {
        font-size: 0.75rem;
        font-weight: 800;
        color: #437691;
        min-width: 35px;
      }

      /* BOTTOM NAVBAR FIXED (5 NAV ITEMS) */
      .bottom-navbar {
        position: fixed;
        bottom: 18px;
        left: 50%;
        transform: translateX(-50%);
        width: 92%;
        max-width: 540px;
        background: rgba(224, 240, 248, 0.92);
        backdrop-filter: blur(14px);
        border-radius: 30px;
        padding: 8px 12px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        border: 1.5px solid rgba(255, 255, 255, 0.9);
        box-shadow: 0 12px 30px rgba(27, 86, 118, 0.2);
        z-index: 100;
      }

      .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: #437691;
        font-size: 0.74rem;
        font-weight: 600;
        padding: 6px 10px;
        border-radius: 20px;
        transition: all 0.3s ease;
      }

      .nav-item i {
        font-size: 1.1rem;
        margin-bottom: 2px;
      }

      .nav-item.active {
        background: #7ed0f7;
        color: #093448;
        box-shadow: 0 4px 10px rgba(126, 208, 247, 0.4);
      }
    </style>
  </head>
  <body>

    <!-- TOP HEADER BAR -->
    <div class="top-header">
      <div class="brand-logo">
        <i class="bi bi-cloud-fill" style="color: #61b5de; font-size: 1.4rem;"></i>
        <span>AdminLTE Tasks ☁️</span>
      </div>
      <div class="header-status">
        <div class="status-dot"></div>
        <span>XII RPL 2 • Task Board</span>
      </div>
    </div>

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">
      
      <!-- ADMINLTE CALLOUT HEADER -->
      <div class="adminlte-callout">
        <div>
          <div class="callout-title">
            <i class="bi bi-check2-square" style="color: #0284c7;"></i>
            <span>Project & Assignment Tracker</span>
          </div>
          <div class="callout-sub">Daftar Tugas & Ujian Aktif Kelompok 2</div>
        </div>
        <div>
          <span class="lte-badge badge-info"><i class="bi bi-list-task"></i> 4 Active Tasks</span>
        </div>
      </div>

      <!-- TABLE CONTAINER -->
      <div class="card-box">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Tugas & Detail</th>
              <th>Guru Pengampu</th>
              <th>Deadline / Pelaksanaan</th>
              <th>Status</th>
              <th>Progress</th>
            </tr>
          </thead>
          <tbody>
            <!-- KPM -->
            <tr>
              <td>1</td>
              <td>
                <span class="task-name">Pembuatan Sistem KPM</span>
                <span class="task-desc">Project Coding</span>
              </td>
              <td><b>Bu Dhian</b></td>
              <td><i class="bi bi-clock-history text-danger"></i> Kamis Ini</td>
              <td><span class="lte-badge badge-warning">Urgent</span></td>
              <td>
                <div class="progress-container">
                  <div class="progress-mini">
                    <div class="progress-bar-fill" style="width: 75%; background: #f39c12;"></div>
                  </div>
                  <span class="progress-percent">75%</span>
                </div>
              </td>
            </tr>

            <!-- B. INGGRIS -->
            <tr>
              <td>2</td>
              <td>
                <span class="task-name">Ujian Bahasa Inggris</span>
                <span class="task-desc">Evaluasi Pembelajaran</span>
              </td>
              <td><b>Ms. Monica</b></td>
              <td><i class="bi bi-exclamation-triangle-fill text-danger"></i> Kamis Ini</td>
              <td><span class="lte-badge badge-danger">Exam Day</span></td>
              <td>
                <div class="progress-container">
                  <div class="progress-mini">
                    <div class="progress-bar-fill" style="width: 50%; background: #e74c3c;"></div>
                  </div>
                  <span class="progress-percent">50%</span>
                </div>
              </td>
            </tr>

            <!-- KIK -->
            <tr>
              <td>3</td>
              <td>
                <span class="task-name">Tugas Project KIK</span>
                <span class="task-desc">Tugas Kelompok membuat ide</span>
              </td>
              <td><b>Pak Gunawan</b></td>
              <td><i class="bi bi-calendar-event text-primary"></i> Rabu Depan</td>
              <td><span class="lte-badge badge-info">In Progress</span></td>
              <td>
                <div class="progress-container">
                  <div class="progress-mini">
                    <div class="progress-bar-fill" style="width: 40%; background: #38bdf8;"></div>
                  </div>
                  <span class="progress-percent">40%</span>
                </div>
              </td>
            </tr>

            <!-- B. JERMAN -->
            <tr>
              <td>4</td>
              <td>
                <span class="task-name">Pembuatan Video B. Jerman</span>
                <span class="task-desc">Tugas Kelompok (Recording & Editing)</span>
              </td>
              <td><b>Pak Abdul</b></td>
              <td><i class="bi bi-calendar-check text-success"></i> 1 Bulan (Long Term)</td>
              <td><span class="lte-badge badge-success">Planning</span></td>
              <td>
                <div class="progress-container">
                  <div class="progress-mini">
                    <div class="progress-bar-fill" style="width: 20%; background: #2ecc71;"></div>
                  </div>
                  <span class="progress-percent">20%</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>

    <!-- BOTTOM NAVBAR (5 MENU: LOGIN, TEAM, DASHBOARD, JADWAL, TASKS) -->
    <div class="bottom-navbar">
      <a href="/login" class="nav-item">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
      <a href="/kelompok" class="nav-item">
        <i class="bi bi-people-fill"></i>
        <span>Team</span>
      </a>
      <a href="/dashboard" class="nav-item">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
      </a>
      <a href="/jadwal" class="nav-item">
        <i class="bi bi-calendar-week-fill"></i>
        <span>Jadwal</span>
      </a>
      <a href="/tasks" class="nav-item active">
        <i class="bi bi-check2-square"></i>
        <span>Tasks</span>
      </a>
    </div>

  </body>
</html>