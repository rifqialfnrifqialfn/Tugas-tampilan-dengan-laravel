<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal - XII RPL 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
      body { background: radial-gradient(circle at center, #edf6fc 0%, #d4e8f3 100%); min-height: 100vh; color: #1a3e54; padding: 30px 20px 100px 20px; display: flex; justify-content: center; }
      .main-wrapper { width: 100%; max-width: 1280px; animation: fadeInUp 0.5s ease forwards; }
      @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
      .top-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
      .brand-title { font-size: 1.3rem; font-weight: 800; color: #0284c7; display: flex; align-items: center; gap: 10px; }
      .btn-logout { background: #ef4444; color: white; padding: 8px 16px; border-radius: 12px; text-decoration: none; font-size: 0.85rem; font-weight: 600; }

      .table-box { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(12px); border-radius: 20px; border: 1.5px solid rgba(255, 255, 255, 0.9); padding: 25px; box-shadow: 0 10px 25px rgba(27, 86, 118, 0.08); }
      table { width: 100%; border-collapse: collapse; text-align: left; }
      th, td { padding: 16px; border-bottom: 1px solid rgba(255, 255, 255, 0.6); font-size: 0.95rem; }
      th { color: #0284c7; font-weight: 800; }
      .badge { padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; background: #e0f2fe; color: #0284c7; }

      .bottom-nav { position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(20px); border: 1.5px solid rgba(255, 255, 255, 0.95); border-radius: 30px; padding: 10px 25px; display: flex; gap: 15px; box-shadow: 0 15px 35px rgba(27, 86, 118, 0.15); z-index: 999; }
      .bottom-nav a { display: flex; align-items: center; gap: 8px; text-decoration: none; color: #437691; padding: 10px 20px; border-radius: 20px; font-weight: 600; font-size: 0.9rem; transition: all 0.3s ease; }
      .bottom-nav a.active, .bottom-nav a:hover { background: rgba(56, 189, 248, 0.25); color: #0284c7; }
    </style>
  </head>
  <body>
    <div class="main-wrapper">
      <div class="top-header">
        <div class="brand-title"><i class="bi bi-calendar-event-fill"></i> Jadwal Pelajaran</div>
        <a href="/logout" class="btn-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>

      <div class="table-box">
        <table>
          <thead>
            <tr><th>Hari</th><th>Jam</th><th>Mata Pelajaran</th><th>Pengajar</th></tr>
          </thead>
          <tbody>
            <tr><td>Senin</td><td>07:00 - 10:00</td><td>Pemrograman Web (Laravel 13)</td><td><span class="badge">Pak Pakhrul</span></td></tr>
            <tr><td>Selasa</td><td>08:00 - 11:00</td><td>Basis Data (MySQL)</td><td><span class="badge">Bu Rina</span></td></tr>
            <tr><td>Rabu</td><td>10:00 - 13:00</td><td>PBO (Java)</td><td><span class="badge">Pak Dedi</span></td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="/dashboard"><i class="bi bi-grid-fill"></i> Dashboard</a>
      <a href="/kelompok"><i class="bi bi-people-fill"></i> Kelompok</a>
      <a href="/jadwal" class="active"><i class="bi bi-calendar-event-fill"></i> Jadwal</a>
      <a href="/tasks"><i class="bi bi-check2-square"></i> Tasks</a>
    </div>
  </body>
</html>