<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok - XII RPL 2</title>
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
                <i class="bi bi-people-fill text-sky-400"></i> Anggota Kelompok
            </h1>
            <p class="text-slate-400 text-sm mt-1">Pengembang & Kontributor Proyek Web XII RPL 2</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Rifqi -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 flex items-center gap-4 backdrop-blur-md">
                <img src="/img/foto_rifqi.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Rifqi+Alfian&background=0284c7&color=fff'" class="w-14 h-14 rounded-xl object-cover border border-sky-500/40">
                <div>
                    <h3 class="font-bold text-white">Rifqi Alfian M.</h3>
                    <p class="text-xs text-slate-400">Ketua / Routing</p>
                    <span class="inline-block mt-2 text-[10px] bg-sky-500/10 text-sky-400 px-2.5 py-0.5 rounded-md border border-sky-500/20">@rifqialfnrifqialfn</span>
                </div>
            </div>

            <!-- Dafa -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 flex items-center gap-4 backdrop-blur-md">
                <div class="w-14 h-14 bg-emerald-500/10 text-emerald-400 font-bold rounded-xl flex items-center justify-center text-lg border border-emerald-500/20">DG</div>
                <div>
                    <h3 class="font-bold text-white">Dafa Gilang R.</h3>
                    <p class="text-xs text-slate-400">Desain Layout</p>
                    <span class="inline-block mt-2 text-[10px] bg-emerald-500/10 text-emerald-400 px-2.5 py-0.5 rounded-md border border-emerald-500/20">@DAFA-24</span>
                </div>
            </div>

            <!-- Gavrila -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 flex items-center gap-4 backdrop-blur-md">
                <div class="w-14 h-14 bg-purple-500/10 text-purple-400 font-bold rounded-xl flex items-center justify-center text-lg border border-purple-500/20">GP</div>
                <div>
                    <h3 class="font-bold text-white">Gavrila Putri P.</h3>
                    <p class="text-xs text-slate-400">Konseptor</p>
                    <span class="inline-block mt-2 text-[10px] bg-purple-500/10 text-purple-400 px-2.5 py-0.5 rounded-md border border-purple-500/20">@gavrilaputri</span>
                </div>
            </div>

            <!-- Siti Nur Aulia -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 flex items-center gap-4 backdrop-blur-md">
                <div class="w-14 h-14 bg-pink-500/10 text-pink-400 font-bold rounded-xl flex items-center justify-center text-lg border border-pink-500/20">SA</div>
                <div>
                    <h3 class="font-bold text-white">Siti Nur Aulia</h3>
                    <p class="text-xs text-slate-400">Input Data & Testing</p>
                    <span class="inline-block mt-2 text-[10px] bg-pink-500/10 text-pink-400 px-2.5 py-0.5 rounded-md border border-pink-500/20">@auliafamawati15</span>
                </div>
            </div>

            <!-- Dimas -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 flex items-center gap-4 backdrop-blur-md">
                <div class="w-14 h-14 bg-amber-500/10 text-amber-400 font-bold rounded-xl flex items-center justify-center text-lg border border-amber-500/20">DA</div>
                <div>
                    <h3 class="font-bold text-white">Dimas Abdul R.</h3>
                    <p class="text-xs text-slate-400">Database</p>
                    <span class="inline-block mt-2 text-[10px] bg-amber-500/10 text-amber-400 px-2.5 py-0.5 rounded-md border border-amber-500/20">@dimasabdulrohman</span>
                </div>
            </div>
        </div>
    </div>

    <!-- FLOATING NAVIGATION -->
    <div class="floating-nav">
        <a href="/login" class="nav-item"><i class="bi bi-box-arrow-in-right"></i><span>Login</span></a>
        <a href="/kelompok" class="nav-item active"><i class="bi bi-people-fill"></i><span>Team</span></a>
        <a href="/dashboard" class="nav-item"><i class="bi bi-grid-fill"></i><span>Dashboard</span></a>
        <a href="/jadwal" class="nav-item"><i class="bi bi-calendar-event-fill"></i><span>Jadwal</span></a>
        <a href="/tasks" class="nav-item"><i class="bi bi-check2-square"></i><span>Tasks</span></a>
    </div>

</body>
</html>