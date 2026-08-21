<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran - XII RPL 2</title>
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
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                <i class="bi bi-calendar-event-fill text-sky-400"></i> Jadwal Pelajaran Mingguan
            </h1>
            <p class="text-slate-400 text-sm mt-1">Kelas XII RPL 2 - Jam Pelajaran (JP) & Pengajar</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            
            <!-- Senin -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-md">
                <div class="bg-sky-600/20 border-b border-sky-500/20 px-5 py-3.5 font-bold text-sky-400 flex items-center gap-2">
                    <i class="bi bi-calendar-day"></i> Senin
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">B. Indonesia</p><p class="text-xs text-slate-500">Bu Tita</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">3 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">PAI</p><p class="text-xs text-slate-500">Bu Laela</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">1 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-sky-400">Basis Data</p><p class="text-xs text-slate-500">Bu Indri</p></div>
                        <span class="text-xs bg-sky-500/20 text-sky-300 border border-sky-500/30 px-2 py-1 rounded">5 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div><p class="font-medium text-slate-200">B. Jerman</p><p class="text-xs text-slate-500">Pak Abdul</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">1 JP</span>
                    </div>
                </div>
            </div>

            <!-- Selasa -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-md">
                <div class="bg-sky-600/20 border-b border-sky-500/20 px-5 py-3.5 font-bold text-sky-400 flex items-center gap-2">
                    <i class="bi bi-calendar-day"></i> Selasa
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">PAI</p><p class="text-xs text-slate-500">Bu Laela</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">2 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">Matematika</p><p class="text-xs text-slate-500">Pak Acun</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">2 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">PPS</p><p class="text-xs text-slate-500">Bu Vanny</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">2 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">Psikotes</p><p class="text-xs text-slate-500">Bu Putri</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">2 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div><p class="font-medium text-slate-200">Persiapan Fisik</p><p class="text-xs text-slate-500">Pak Asep</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">2 JP</span>
                    </div>
                </div>
            </div>

            <!-- Rabu -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-md">
                <div class="bg-sky-600/20 border-b border-sky-500/20 px-5 py-3.5 font-bold text-sky-400 flex items-center gap-2">
                    <i class="bi bi-calendar-day"></i> Rabu
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-sky-400">KIK</p><p class="text-xs text-slate-500">Pak Gunawan</p></div>
                        <span class="text-xs bg-sky-500/20 text-sky-300 border border-sky-500/30 px-2 py-1 rounded">5 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">B. Inggris</p><p class="text-xs text-slate-500">Ms. Monica</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">1 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div><p class="font-medium text-sky-400">KPB</p><p class="text-xs text-slate-500">Pak Gunawan</p></div>
                        <span class="text-xs bg-sky-500/20 text-sky-300 border border-sky-500/30 px-2 py-1 rounded">4 JP</span>
                    </div>
                </div>
            </div>

            <!-- Kamis -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-md">
                <div class="bg-sky-600/20 border-b border-sky-500/20 px-5 py-3.5 font-bold text-sky-400 flex items-center gap-2">
                    <i class="bi bi-calendar-day"></i> Kamis
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-sky-400">KPM</p><p class="text-xs text-slate-500">Bu Dhian</p></div>
                        <span class="text-xs bg-sky-500/20 text-sky-300 border border-sky-500/30 px-2 py-1 rounded">6 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">B. Jerman</p><p class="text-xs text-slate-500">Pak Abdul</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">1 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div><p class="font-medium text-slate-200">B. Inggris</p><p class="text-xs text-slate-500">Ms. Monica</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">3 JP</span>
                    </div>
                </div>
            </div>

            <!-- Jumat -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-md">
                <div class="bg-sky-600/20 border-b border-sky-500/20 px-5 py-3.5 font-bold text-sky-400 flex items-center gap-2">
                    <i class="bi bi-calendar-day"></i> Jumat
                </div>
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-slate-200">Pembimbingan Walas</p><p class="text-xs text-slate-500">Wali Kelas</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">-</span>
                    </div>
                    <div class="flex justify-between items-center text-sm border-b border-slate-800/60 pb-2">
                        <div><p class="font-medium text-sky-400">KPW</p><p class="text-xs text-slate-500">Pak Jumadi</p></div>
                        <span class="text-xs bg-sky-500/20 text-sky-300 border border-sky-500/30 px-2 py-1 rounded">7 JP</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div><p class="font-medium text-slate-200">Matematika</p><p class="text-xs text-slate-500">Pak Acun</p></div>
                        <span class="text-xs bg-slate-800 text-slate-300 px-2 py-1 rounded">1 JP</span>
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

</body>
</html>