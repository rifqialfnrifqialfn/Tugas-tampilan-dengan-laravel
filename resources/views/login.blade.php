<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sky Blue Login</title>

    <!-- Memanggil CSS Custom Sky Blue yang baru kamu bikin -->
    <link rel="stylesheet" href="{{ asset('css/custom-sky.css') }}" />
  </head>

  <body class="sky-theme">

    <!-- Ornaments Melayang -->
    <div class="bg-float-item bg-item-1">☁️</div>
    <div class="bg-float-item bg-item-2">ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</div>
    <div class="bg-float-item bg-item-3">ᜊ( ' ⩊ '𖦹)ᜊ</div>
    <div class="bg-float-item bg-item-4">🐱</div>
    <div class="bg-float-item bg-item-5">🐰</div>

    <!-- Main Card -->
    <div class="sky-card-outer">
      <div class="cute-character-top">🐱 ᜊ( ' ⩊ '𖦹)ᜊ</div>

      <div class="sky-header">
        <span>☁️ <i class="bi bi-cloud-line"></i></span>
        <span>(っ 📱 c)</span>
        <i class="bi bi-gear"></i>
      </div>

      <div class="sky-card-inner">
        <!-- Simbol Welcome Custom -->
        <div class="aesthetic-welcome-symbol">ִ ࣪ ˖ ࣪ ᨰꫀᥣᥴ᥆ꩇꫀ ! ᰔ ִ ׄ</div>
        <div class="sky-title">Welcome Back!</div>
        <div class="sky-subtitle">Let's get you floating.</div>

        <form action="/dashboard" method="get">
          <div class="custom-input-group">
            <i class="bi bi-cloud-line"></i>
            <input type="email" name="email" placeholder="you@sky.com" required />
            <span style="font-size: 0.75rem; color: #b8cde0;">☁️</span>
          </div>

          <div class="custom-input-group">
            <i class="bi bi-lock"></i>
            <input id="passwordInput" type="password" name="password" placeholder="••••••••" required />
            <i id="togglePasswordIcon" class="bi bi-eye toggle-eye"></i>
          </div>

          <button type="submit" class="btn btn-dark-teal">Sign In</button>
        </form>

        <a href="/dashboard" class="btn btn-google-pill">
          <svg width="16" height="16" viewBox="0 0 24 24">
            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.23v3.15C3.25 21.37 7.37 24 12 24z"/>
            <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.23C.44 8.15 0 9.99 0 12s.44 3.85 1.23 5.42l4.05-3.15z"/>
            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.37 0 3.25 2.63 1.23 6.58l4.05 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
          </svg>
          Continue with Google
        </a>

        <div class="sky-footer-links">
          <div><a href="#">Forgot Password? ( •̀ ᴗ •́ )</a></div>
          <div><a href="/register">Register</a></div>
        </div>
      </div>

      <div class="decor-kaomoji-bottom">
        <span>☁️ 🐈</span>
        <span>( ⩺ ⩹ ) 🐇</span>
      </div>
    </div>

    <!-- Memanggil JS Custom Sky Blue yang baru kamu bikin -->
    <script src="{{ asset('js/custom-sky.js') }}"></script>
  </body>
</html>