<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sky Blue Register</title>
    <link rel="stylesheet" href="{{ asset('css/custom-sky.css') }}" />
  </head>
  <body class="sky-theme">

    <div class="bg-float-item bg-item-1">☁️</div>
    <div class="bg-float-item bg-item-2">ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</div>
    <div class="bg-float-item bg-item-3">ᜊ( ' ⩊ '𖦹)ᜊ</div>

    <div class="sky-card-outer">
      <div class="cute-character-top">🐱 ᜊ( ' ⩊ '𖦹)ᜊ</div>

      <div class="sky-header">
        <span>☁️ <i class="bi bi-cloud-line"></i></span>
        <span>( ✍️ ☁️ )</span>
        <i class="bi bi-gear"></i>
      </div>

      <div class="sky-card-inner">
        <div class="aesthetic-welcome-symbol">ִ ࣪ ˖ ࣪ ꪑꫀꪑᥲᥲ̄̄̃̃ᥴℎ⨏ ! ᰔ ִ ׄ</div>
        <div class="sky-title">Create Account</div>
        <div class="sky-subtitle">Join us in the clouds!</div>

        <form action="/login" method="get">
          <div class="custom-input-group">
            <i class="bi bi-person"></i>
            <input type="text" name="name" placeholder="Full Name" required />
          </div>

          <div class="custom-input-group">
            <i class="bi bi-cloud-line"></i>
            <input type="email" name="email" placeholder="you@sky.com" required />
          </div>

          <div class="custom-input-group">
            <i class="bi bi-lock"></i>
            <input id="passwordInput" type="password" name="password" placeholder="••••••••" required />
            <i id="togglePasswordIcon" class="bi bi-eye toggle-eye"></i>
          </div>

          <button type="submit" class="btn btn-dark-teal">Register Now</button>
        </form>

        <div class="sky-footer-links">
          <div>Already have an account? <a href="/login">Login here ( •̀ ᴗ •́ )</a></div>
        </div>
      </div>

      <div class="decor-kaomoji-bottom">
        <span>☁️ 🐈</span>
        <span>( ⩺ ⩹ ) 🐇</span>
      </div>
    </div>

    <script src="{{ asset('js/custom-sky.js') }}"></script>
  </body>
</html>