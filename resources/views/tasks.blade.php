<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas - XII RPL 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
<body class="bg-slate-950 text-slate-100 min-h-screen p-6 pb-28" x-data="{ 
    tasks: [
        { id: 1, title: 'Pembuatan Sistem KPM (Bu Dhian)', dev: 'Rifqi & Tim', done: false },
        { id: 2, title: 'Ujian Bahasa Inggris (Ms. Monica)', dev: 'Semua Anggota', done: false },
        { id: 3, title: 'Tugas Proyek KIK (Pak Gunawan)', dev: 'Dafa & Dimas', done: false },
        { id: 4, title: 'Video Bahasa Jerman (Pak Abdul)', dev: 'Aulia & Gavrila', done: false }
    ],
    newTask: '',
    newDev: 'Rifqi',
    addTask() {
        if(this.newTask.trim() !== '') {
            this.tasks.push({ id: Date.now(), title: this.newTask, dev: this.newDev, done: false });
            this.newTask = '';
        }
    }
}">

    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                <i class="bi bi-check2-square text-sky-400"></i> Task Manager Kelompok
            </h1>
            <p class="text-slate-400 text-sm mt-1">Daftar Tugas Kelompok & Sekolah XII RPL 2</p>
        </div>

        <!-- Form Tambah -->
        <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-4 mb-6 flex flex-col sm:flex-row gap-3 backdrop-blur-md">
            <input type="text" x-model="newTask" @keydown.enter="addTask()" placeholder="Tulis tugas baru..." class="flex-1 bg-slate-950/80 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-sky-500">
            <select x-model="newDev" class="bg-slate-950/80 border border-slate-800 rounded-xl px-3 py-2.5 text-sm text-slate-300 focus:outline-none focus:border-sky-500">
                <option value="Rifqi">Rifqi</option>
                <option value="Dafa">Dafa</option>
                <option value="Gavrila">Gavrila</option>
                <option value="Aulia">Aulia</option>
                <option value="Dimas">Dimas</option>
            </select>
            <button @click="addTask()" class="bg-sky-600 hover:bg-sky-500 text-white font-medium px-5 py-2.5 rounded-xl text-sm transition flex items-center justify-center gap-2">
                <i class="bi bi-plus-lg"></i>
                <span>Tambah</span>
            </button>
        </div>

        <!-- List Tasks -->
        <div class="space-y-3">
            <template x-for="(task, index) in tasks" :key="task.id">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl p-4 flex items-center justify-between transition backdrop-blur-md" :class="{ 'opacity-40 line-through': task.done }">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" x-model="task.done" class="w-5 h-5 rounded border-slate-700 bg-slate-950 text-sky-600 focus:ring-0 cursor-pointer">
                        <span class="text-sm font-medium text-slate-200" x-text="task.title"></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-xs bg-slate-800 text-slate-400 px-2.5 py-1 rounded-md border border-slate-700/50" x-text="task.dev"></span>
                        <button @click="tasks.splice(index, 1)" class="text-red-400 hover:text-red-300 p-1 transition"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- FLOATING NAVIGATION -->
    <div class="floating-nav">S
        <a href="/login" class="nav-item"><i class="bi bi-box-arrow-in-right"></i><span>Login</span></a>
        <a href="/kelompok" class="nav-item"><i class="bi bi-people-fill"></i><span>Team</span></a>
        <a href="/dashboard" class="nav-item"><i class="bi bi-grid-fill"></i><span>Dashboard</span></a>
        <a href="/jadwal" class="nav-item"><i class="bi bi-calendar-event-fill"></i><span>Jadwal</span></a>
        <a href="/tasks" class="nav-item active"><i class="bi bi-check2-square"></i><span>Tasks</span></a>
    </div>

</body>
</html>