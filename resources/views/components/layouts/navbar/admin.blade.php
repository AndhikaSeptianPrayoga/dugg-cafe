<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-white shadow-sm w-100" id="layout-navbar" style="padding: 0.75rem 0; position: relative; z-index: 10;">
  <div class="d-flex align-items-center justify-content-between w-100 px-4">
    <a class="navbar-brand d-flex align-items-center">
      <img src="/assets/img/image/logo.png" alt="Dugg Logo" style="height: 40px;" class="me-2">
    </a>
    <ul class="navbar-nav flex-row align-items-center gap-3">
      <li class="nav-item">
        <span class="text-muted me-2">Selamat datang,</span>
        <span class="fw-bold text-primary me-3">{{ auth()->user()->name ?? 'Admin' }}</span>
      </li>
      <li class="nav-item">
        <a href="/" class="btn btn-outline-primary btn-sm rounded-pill px-3 me-2">
          <i class="fas fa-home me-1"></i>Kembali ke Front End
        </a>
      </li>
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
            <i class="fas fa-sign-out-alt me-1"></i>Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav> 