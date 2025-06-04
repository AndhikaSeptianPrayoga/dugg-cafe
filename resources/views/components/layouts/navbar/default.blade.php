<nav class="layout-navbar navbar navbar-expand-xl align-items-center  shadow-sm w-100 fixed-top" id="layout-navbar" style=" background-color: #F8F1E8; padding: 0.75rem 0; position: fixed; z-index: 10; background-image: url('/assets/img/image/navbar-decoration.png'); background-repeat: no-repeat; background-position: right center; background-size: contain;">
  <div class="d-flex align-items-center justify-content-between w-100 px-4">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="/assets/img/image/logo.png" alt="Dugg Logo" style="height: 40px; margin-left: 50px;" class="me-2">
    </a>
    <ul class="navbar-nav flex-row align-items-center gap-3" style="margin-right: 50px;">
      <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('lokasi') }}">Lokasi</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('cerita') }}">Cerita</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
    </ul>
  </div>
</nav>
