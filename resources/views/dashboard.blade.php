<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - XII RPL 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .floating-nav {
            position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
            background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 30px;
            padding: 8px 16px; display: flex; align-items: center; gap: 12px; z-index: 9999;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);
        }
        .floating-nav .nav-item { color: #94a3b8; text-decoration: none; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem; font-weight: 500; display: flex; align-items: center; gap: 8px; transition: all 0.3s; }
        .floating-nav .nav-item:hover { color: #ffffff; background: rgba(255, 255, 255, 0.05); }
        .floating-nav .nav-item.active { color: #ffffff; background: #0284c7; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3); }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen p-6 pb-28">

    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                    <i class="bi bi-grid-fill text-sky-400"></i> Dashboard Utama
                </h1>
                <p class="text-slate-400 text-sm mt-1">Ringkasan Aktivitas dan Informasi Kelompok XII RPL 2</p>
            </div>
            <span class="text-xs bg-slate-900 border border-slate-800 text-slate-400 px-3 py-1.5 rounded-full">Tahun Ajaran 2026</span>
        </div>

        <!-- Cards Metrics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 backdrop-blur-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Anggota</span>
                    <div class="w-10 h-10 bg-sky-500/10 text-sky-400 rounded-xl flex items-center justify-center border border-sky-500/20"><i class="bi bi-people text-xl"></i></div>
                </div>
                <h2 class="text-3xl font-bold text-white">5 Orang</h2>
                <a href="/kelompok" class="inline-flex items-center gap-1 text-xs text-sky-400 hover:text-sky-300 mt-3 transition">Lihat Tim <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 backdrop-blur-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Jadwal</span>
                    <div class="w-10 h-10 bg-emerald-500/10 text-emerald-400 rounded-xl flex items-center justify-center border border-emerald-500/20"><i class="bi bi-calendar-week text-xl"></i></div>
                </div>
                <h2 class="text-3xl font-bold text-white">5 Hari</h2>
                <a href="/jadwal" class="inline-flex items-center gap-1 text-xs text-emerald-400 hover:text-emerald-300 mt-3 transition">Cek Jadwal <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 backdrop-blur-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Pending Tasks</span>
                    <div class="w-10 h-10 bg-amber-500/10 text-amber-400 rounded-xl flex items-center justify-center border border-amber-500/20"><i class="bi bi-clock-history text-xl"></i></div>
                </div>
                <h2 class="text-3xl font-bold text-white">4 Tugas</h2>
                <a href="/tasks" class="inline-flex items-center gap-1 text-xs text-amber-400 hover:text-amber-300 mt-3 transition">Kelola Tasks <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 backdrop-blur-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Proyek Web</span>
                    <div class="w-10 h-10 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center border border-purple-500/20"><i class="bi bi-code-slash text-xl"></i></div>
                </div>
                <h2 class="text-3xl font-bold text-white">Laravel 13</h2>
                <span class="inline-block text-xs text-purple-400 mt-3">AdminLTE Dark Theme</span>
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

</body>
</html>