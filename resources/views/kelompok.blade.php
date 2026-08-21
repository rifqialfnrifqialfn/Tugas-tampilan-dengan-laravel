<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok - XII RPL 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
      body { background: radial-gradient(circle at center, #edf6fc 0%, #d4e8f3 100%); min-height: 100vh; color: #1a3e54; padding: 30px 20px 100px 20px; display: flex; justify-content: center; }
      .main-wrapper { width: 100%; max-width: 1280px; animation: fadeInUp 0.5s ease forwards; }
      @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
      .top-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
      .brand-title { font-size: 1.3rem; font-weight: 800; color: #0284c7; display: flex; align-items: center; gap: 10px; }
      .btn-logout { background: #ef4444; color: white; padding: 8px 16px; border-radius: 12px; text-decoration: none; font-size: 0.85rem; font-weight: 600; }

      .grid-team { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 20px; }
      .card-team { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(12px); border: 1.5px solid rgba(255, 255, 255, 0.9); border-radius: 20px; padding: 25px; box-shadow: 0 10px 25px rgba(27, 86, 118, 0.08); }
      .card-team h3 { color: #0284c7; font-size: 1.15rem; margin-bottom: 15px; border-bottom: 2px solid rgba(56, 189, 248, 0.3); padding-bottom: 10px; }
      .card-team ul { list-style: none; display: flex; flex-direction: column; gap: 12px; }
      .card-team li { display: flex; align-items: center; gap: 10px; font-weight: 600; }

      .bottom-nav { position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(20px); border: 1.5px solid rgba(255, 255, 255, 0.95); border-radius: 30px; padding: 10px 25px; display: flex; gap: 15px; box-shadow: 0 15px 35px rgba(27, 86, 118, 0.15); z-index: 999; }
      .bottom-nav a { display: flex; align-items: center; gap: 8px; text-decoration: none; color: #437691; padding: 10px 20px; border-radius: 20px; font-weight: 600; font-size: 0.9rem; transition: all 0.3s ease; }
      .bottom-nav a.active, .bottom-nav a:hover { background: rgba(56, 189, 248, 0.25); color: #0284c7; }
    </style>
  </head>
  <body>
    <div class="main-wrapper">
      <div class="top-header">
        <div class="brand-title"><i class="bi bi-people-fill"></i> Kelompok Belajar</div>
        <a href="/logout" class="btn-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>

      <div class="grid-team">
        <div class="card-team">
          <h3><i class="bi bi-code-slash"></i> Kelompok 1 (Laravel 13 UI)</h3>
          <ul>
            <li><i class="bi bi-person-circle" style="color: #0284c7;"></i> Rifqi (Ketua)</li>
            <li><i class="bi bi-person"></i> Ahmad Rizky</li>
            <li><i class="bi bi-person"></i> Budi Santoso</li>
          </ul>
        </div>
        <div class="card-team">
          <h3><i class="bi bi-database"></i> Kelompok 2 (Database API)</h3>
          <ul>
            <li><i class="bi bi-person-circle" style="color: #0284c7;"></i> Doni Tata (Ketua)</li>
            <li><i class="bi bi-person"></i> Eko Prasetyo</li>
            <li><i class="bi bi-person"></i> Fajar Siddiq</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="/dashboard"><i class="bi bi-grid-fill"></i> Dashboard</a>
      <a href="/kelompok" class="active"><i class="bi bi-people-fill"></i> Kelompok</a>
      <a href="/jadwal"><i class="bi bi-calendar-event-fill"></i> Jadwal</a>
      <a href="/tasks"><i class="bi bi-check2-square"></i> Tasks</a>
    </div>
  </body>
</html>