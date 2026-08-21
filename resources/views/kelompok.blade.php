<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team - XII RPL 2</title>
    <!-- Favicon Awan Aesthetic -->
    <link rel="icon" href="https://api.iconify.design/bi:cloud-fill.svg?color=%237dc9ec" type="image/svg+xml">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    
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
        padding-bottom: 90px;
        color: #1a3e54;
      }

      /* 1. TOP HEADER BAR PROFESIONAL */
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
        margin-bottom: 25px;
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

      /* MAIN FULL CONTAINER */
      .main-wrapper {
        width: 95%;
        max-width: 1400px;
        margin: 0 auto;
      }

      .hero-title-section {
        text-align: center;
        margin-bottom: 25px;
      }

      .hero-title-section h1 {
        font-size: 2.2rem;
        font-weight: 800;
        color: #0d384d;
      }

      .hero-title-section p {
        font-size: 0.95rem;
        color: #3b6b85;
        font-weight: 600;
      }

      /* GRID 5 KARTU Menyamping */
      .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 18px;
      }

      .card-team {
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.75) 0%, rgba(216, 237, 247, 0.75) 100%);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        padding: 22px 16px;
        border: 2px solid rgba(255, 255, 255, 0.9);
        box-shadow: 0 10px 25px rgba(27, 86, 118, 0.08);
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
      }

      .card-team:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(27, 86, 118, 0.15);
      }

      .badge-role-top {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.85);
        color: #1a5170;
        font-size: 0.7rem;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.9);
      }

      .profile-img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        border: 3.5px solid #fff;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 12px;
      }

      .member-name {
        font-size: 1.1rem;
        font-weight: 800;
        color: #0b3144;
        text-align: center;
        margin-bottom: 4px;
      }

      .member-id {
        font-size: 0.78rem;
        font-weight: 700;
        color: #4a7d96;
        background: rgba(255, 255, 255, 0.6);
        padding: 2px 10px;
        border-radius: 8px;
        margin-bottom: 12px;
      }

      .quote-box {
        width: 100%;
        background: rgba(255, 255, 255, 0.85);
        border-radius: 14px;
        padding: 12px 10px;
        font-size: 0.8rem;
        font-style: italic;
        color: #2b566e;
        text-align: center;
        margin-bottom: 14px;
        border: 1px solid rgba(255, 255, 255, 0.9);
      }

      /* pengganti (STATUS & ELEMEN ACTION) */
      .card-footer-info {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 8px;
      }

      .task-status {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(255, 255, 255, 0.55);
        padding: 6px 12px;
        border-radius: 10px;
        font-size: 0.73rem;
        font-weight: 700;
        color: #1a5170;
      }

      .status-pill {
        background: #2ecc71;
        color: #fff;
        padding: 2px 8px;
        border-radius: 6px;
        font-size: 0.68rem;
      }

      .action-buttons {
        display: flex;
        gap: 8px;
      }

      .btn-card-action {
        flex: 1;
        padding: 6px 0;
        border: none;
        background: rgba(255, 255, 255, 0.85);
        border-radius: 10px;
        color: #1a5170;
        font-size: 0.75rem;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        transition: 0.2s;
        border: 1px solid rgba(255, 255, 255, 0.9);
      }

      .btn-card-action:hover {
        background: #7ed0f7;
        color: #093448;
      }

      /* BOTTOM NAVBAR */
      .bottom-navbar {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 420px;
        background: rgba(224, 240, 248, 0.92);
        backdrop-filter: blur(14px);
        border-radius: 30px;
        padding: 8px 20px;
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
        font-size: 0.78rem;
        font-weight: 600;
        padding: 6px 18px;
        border-radius: 20px;
        transition: all 0.3s ease;
      }

      .nav-item i {
        font-size: 1.25rem;
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
        <i class="bi bi-cloud-fill" style="color: #61b5de; font-size: 1.5rem;"></i>
        <span>Kelompok 2 Web</span>
      </div>
      <div class="header-status">
        <div class="status-dot"></div>
        <span>XII RPL 2 • Active Session</span>
      </div>
    </div>

    <!-- MAIN CONTAINER FULL WIDTH -->
    <div class="main-wrapper">
      <div class="hero-title-section">
        <h1>☁️ Our Team Project</h1>
        <p>Pengembang Utama Aplikasi Web XII RPL 2</p>
      </div>

      <!-- GRID 5 ANGGOTA TIM -->
      <div class="team-grid">
        
        <!-- CARD 1: RIFQI -->
        <div class="card-team">
          <span class="badge-role-top">Routing</span>
          <img src="{{ asset('img/foto_rifqi.jpg') }}" class="profile-img" alt="Rifqi">
          <div class="member-name">Rifqi Alfian M.</div>
          <div class="member-id">XII RPL 2 • ID: 31</div>
          <div class="quote-box">"Keep your head in the clouds and your feet on the ground." 🌟</div>
          
          <!-- PENGGANTI QUOTE (Status & Tombol Kontak Awan) -->
          <div class="card-footer-info">
            <div class="task-status">
              <span>Status Tugas:</span>
              <span class="status-pill">100% Done</span>
            </div>
            <div class="action-buttons">
              <button class="btn-card-action"><i class="bi bi-chat-dots-fill"></i> Message</button>
              <button class="btn-card-action"><i class="bi bi-envelope-fill"></i> Mail</button>
            </div>
          </div>
        </div>

        <!-- CARD 2: DAFA -->
        <div class="card-team">
          <span class="badge-role-top">UI/UX Layout</span>
          <img src="{{ asset('img/foto_bilek.jpg') }}" class="profile-img" alt="Dafa">
          <div class="member-name">Dafa Gilang R.</div>
          <div class="member-id">XII RPL 2 • ID: 88</div>
          <div class="quote-box">"Koding itu seni, error itu tradisi." ☕</div>
          
          <div class="card-footer-info">
            <div class="task-status">
              <span>Status Tugas:</span>
              <span class="status-pill">100% Done</span>
            </div>
            <div class="action-buttons">
              <button class="btn-card-action"><i class="bi bi-chat-dots-fill"></i> Message</button>
              <button class="btn-card-action"><i class="bi bi-envelope-fill"></i> Mail</button>
            </div>
          </div>
        </div>

        <!-- CARD 3: GAVRILA -->
        <div class="card-team">
          <span class="badge-role-top">Konseptor</span>
          <img src="{{ asset('img/foto_gavy.jpg') }}" class="profile-img" alt="Gavrila">
          <div class="member-name">Gavrila Putri P.</div>
          <div class="member-id">XII RPL 2 • ID: 12</div>
          <div class="quote-box">"In life, if you don't risk anything, you risk everything." ✨</div>
          
          <div class="card-footer-info">
            <div class="task-status">
              <span>Status Tugas:</span>
              <span class="status-pill">100% Done</span>
            </div>
            <div class="action-buttons">
              <button class="btn-card-action"><i class="bi bi-chat-dots-fill"></i> Message</button>
              <button class="btn-card-action"><i class="bi bi-envelope-fill"></i> Mail</button>
            </div>
          </div>
        </div>

        <!-- CARD 4: SITI NUR AULIA -->
        <div class="card-team">
          <span class="badge-role-top">Data & Testing</span>
          <img src="{{ asset('img/foto_aulia.jpg') }}" class="profile-img" alt="Siti">
          <div class="member-name">Siti Nur Aulia</div>
          <div class="member-id">XII RPL 2 • ID: 45</div>
          <div class="quote-box">"Kerjakan dengan teliti, hasil pasti mengikuti." 🌸</div>
          
          <div class="card-footer-info">
            <div class="task-status">
              <span>Status Tugas:</span>
              <span class="status-pill">100% Done</span>
            </div>
            <div class="action-buttons">
              <button class="btn-card-action"><i class="bi bi-chat-dots-fill"></i> Message</button>
              <button class="btn-card-action"><i class="bi bi-envelope-fill"></i> Mail</button>
            </div>
          </div>
        </div>

        <!-- CARD 5: DIMAS -->
        <div class="card-team">
          <span class="badge-role-top">Orang Ganteng</span>
          <img src="{{ asset('img/foto_dimas.jpg') }}" class="profile-img" alt="Dimas">
          <div class="member-name">Dimas Abdul R.</div>
          <div class="member-id">XII RPL 2 • ID: 19</div>
          <div class="quote-box">"Paskibra selalu dihati." ⚡</div>
          
          <div class="card-footer-info">
            <div class="task-status">
              <span>Status Tugas:</span>
              <span class="status-pill">100% Done</span>
            </div>
            <div class="action-buttons">
              <button class="btn-card-action"><i class="bi bi-chat-dots-fill"></i> Message</button>
              <button class="btn-card-action"><i class="bi bi-envelope-fill"></i> Mail</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    git config user.name "dimasabdulrohman-xi-rpl2"
git config user.email "dimasabdulrohman-xi-rpl2@gmail.com"
git add resources/views/kelompok.blade.php
git commit -m "Feat: Membuat daftar Anggota Team"
git push origin main
    <!-- BOTTOM NAVBAR -->
    <div class="bottom-navbar">
      <a href="/login" class="nav-item">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
      <a href="/kelompok" class="nav-item active">
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
      <a href="/tasks" class="nav-item">
  <i class="bi bi-check2-square"></i>
  <span>Tasks</span>
</a>
    </div>

  </body>
</html>