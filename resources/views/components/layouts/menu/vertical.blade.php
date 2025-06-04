<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('dashboard') }}" wire:navigate>
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div class="text-truncate">{{ __('Dashboard') }}</div>
      </a>
    </li>

    <!-- Kelola Produk -->
    <li class="menu-item {{ request()->is('admin/products*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-package"></i>
        <div class="text-truncate">Kelola Produk</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.products.index') }}" wire:navigate>
            <div class="text-truncate">Daftar Produk</div>
          </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.products.create') }}" wire:navigate>
            <div class="text-truncate">Tambah Produk</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Kelola Testimoni -->
    <li class="menu-item {{ request()->is('admin/testimonials*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-star"></i>
        <div class="text-truncate">Kelola Testimoni</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('admin.testimonials.index') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.testimonials.index') }}" wire:navigate>
            <div class="text-truncate">Daftar Testimoni</div>
          </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.testimonials.create') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.testimonials.create') }}" wire:navigate>
            <div class="text-truncate">Tambah Testimoni</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Kelola Blog -->
    <li class="menu-item {{ request()->is('admin/blogs*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-book-open"></i>
        <div class="text-truncate">Kelola Blog</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.blogs.index') }}" wire:navigate>
            <div class="text-truncate">Daftar Blog</div>
          </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.blogs.create') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('admin.blogs.create') }}" wire:navigate>
            <div class="text-truncate">Tambah Blog</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Frontend -->
    <li class="menu-item {{ request()->is('/') || request()->is('menu') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-store"></i>
        <div class="text-truncate">Frontend</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a class="menu-link" href="{{ route('home') }}" target="_blank">
            <div class="text-truncate">Homepage</div>
          </a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="{{ route('menu') }}" target="_blank">
            <div class="text-truncate">Menu Produk</div>
          </a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="{{ route('blog') }}" target="_blank">
            <div class="text-truncate">Blog</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Settings -->
    <li class="menu-item {{ request()->is('settings/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cog"></i>
        <div class="text-truncate">{{ __('Settings') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('settings.profile') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.profile') }}" wire:navigate>
            <div class="text-truncate">{{ __('Profile') }}</div>
          </a>
        </li>
        <li class="menu-item {{ request()->routeIs('settings.password') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.password') }}" wire:navigate>
            <div class="text-truncate">{{ __('Password') }}</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
<!-- / Menu -->

<script>
  // Toggle the 'open' class when the menu-toggle is clicked
  document.querySelectorAll('.menu-toggle').forEach(function(menuToggle) {
    menuToggle.addEventListener('click', function() {
      const menuItem = menuToggle.closest('.menu-item');
      // Toggle the 'open' class on the clicked menu-item
      menuItem.classList.toggle('open');
    });
  });
</script>
