<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
<body class="bg-slate-900 text-slate-100 min-h-screen p-6 pb-24">

    <div class="max-w-6xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                <i class="bi bi-people-fill text-sky-400"></i> Anggota Kelompok
            </h1>
            <p class="text-slate-400 text-sm mt-1">Daftar Kontributor & Pengembang Aplikasi</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-slate-800/60 border border-slate-700/50 rounded-2xl p-5 flex items-center gap-4">
                <div class="w-14 h-14 bg-sky-500/20 text-sky-400 font-bold rounded-full flex items-center justify-center text-xl border border-sky-500/30">RF</div>
                <div>
                    <h3 class="font-bold text-white">Rifqi</h3>
                    <p class="text-xs text-slate-400">rifqialfnrifqialfn</p>
                    <span class="inline-block mt-2 text-[10px] bg-sky-500/10 text-sky-400 px-2 py-0.5 rounded border border-sky-500/20">Leader / Fullstack</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-slate-800/60 border border-slate-700/50 rounded-2xl p-5 flex items-center gap-4">
                <div class="w-14 h-14 bg-pink-500/20 text-pink-400 font-bold rounded-full flex items-center justify-center text-xl border border-pink-500/30">AU</div>
                <div>
                    <h3 class="font-bold text-white">Aulia Famawati</h3>
                    <p class="text-xs text-slate-400">auliafamawati15</p>
                    <span class="inline-block mt-2 text-[10px] bg-pink-500/10 text-pink-400 px-2 py-0.5 rounded border border-pink-500/20">UI/UX Designer</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-slate-800/60 border border-slate-700/50 rounded-2xl p-5 flex items-center gap-4">
                <div class="w-14 h-14 bg-emerald-500/20 text-emerald-400 font-bold rounded-full flex items-center justify-center text-xl border border-emerald-500/30">DF</div>
                <div>
                    <h3 class="font-bold text-white">Dafa</h3>
                    <p class="text-xs text-slate-400">DAFA-24</p>
                    <span class="inline-block mt-2 text-[10px] bg-emerald-500/10 text-emerald-400 px-2 py-0.5 rounded border border-emerald-500/20">Frontend Dev</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-slate-800/60 border border-slate-700/50 rounded-2xl p-5 flex items-center gap-4">
                <div class="w-14 h-14 bg-purple-500/20 text-purple-400 font-bold rounded-full flex items-center justify-center text-xl border border-purple-500/30">DM</div>
                <div>
                    <h3 class="font-bold text-white">Dimas Abdul Rohman</h3>
                    <p class="text-xs text-slate-400">dimasabdulrohman-xi-rpl2</p>
                    <span class="inline-block mt-2 text-[10px] bg-purple-500/10 text-purple-400 px-2 py-0.5 rounded border border-purple-500/20">Backend Dev</span>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-slate-800/60 border border-slate-700/50 rounded-2xl p-5 flex items-center gap-4">
                <div class="w-14 h-14 bg-amber-500/20 text-amber-400 font-bold rounded-full flex items-center justify-center text-xl border border-amber-500/30">JN</div>
                <div>
                    <h3 class="font-bold text-white">Januarvy</h3>
                    <p class="text-xs text-slate-400">januarvy</p>
                    <span class="inline-block mt-2 text-[10px] bg-amber-500/10 text-amber-400 px-2 py-0.5 rounded border border-amber-500/20">Frontend Dev</span>
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