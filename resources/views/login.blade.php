<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kelompok Web</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800/70 border border-slate-700/50 rounded-2xl p-8 backdrop-blur-md shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-sky-500/10 text-sky-400 rounded-2xl mb-4 border border-sky-500/20">
                <i class="bi bi-box-arrow-in-right text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-white">Selamat Datang</h1>
            <p class="text-slate-400 text-sm mt-1">Silakan masuk ke akun Anda</p>
        </div>

        <form action="/login" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Username / Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" required placeholder="Masukkan username" class="w-full bg-slate-900/60 border border-slate-700 rounded-xl py-2.5 pl-10 pr-4 text-sm text-slate-100 placeholder-slate-500 focus:outline-none focus:border-sky-500 transition">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" required placeholder="••••••••" class="w-full bg-slate-900/60 border border-slate-700 rounded-xl py-2.5 pl-10 pr-4 text-sm text-slate-100 placeholder-slate-500 focus:outline-none focus:border-sky-500 transition">
                </div>
            </div>

            <button type="submit" class="w-full bg-sky-600 hover:bg-sky-500 text-white font-semibold py-2.5 rounded-xl transition duration-200 shadow-lg shadow-sky-600/30 flex items-center justify-center gap-2">
                <span>Masuk Sekarang</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>
    </div>

</body>
</html> 