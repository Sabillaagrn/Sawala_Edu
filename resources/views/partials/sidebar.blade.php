<aside>

  <div class="logo">
    <img src="{{ asset('image/sidebar/sawala_white.png') }}" alt="Sawala Logo" class="logo-img">
    <span class="logo-text">Sawala Edu</span>
  </div>

  <nav>
    <ul>
      <li>
        <a href="{{ url('/dashboard') }}" class="@if(Request::is('dashboard')) active @endif">
          <i class="fa-solid fa-chart-line"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/guru') }}" class="@if(Request::is('guru')) active @endif">
          <i class="fa-solid fa-chalkboard-user"></i>
          <span>Guru</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/siswa') }}" class="@if(Request::is('siswa')) active @endif">
          <i class="fa-solid fa-graduation-cap"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/akun') }}" class="@if(Request::is('akun')) active @endif">
          <i class="fa-solid fa-school"></i>
          <span>Kelola Akun</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/profile') }}" class="@if(Request::is('profile')) active @endif">
          <i class="fa-solid fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="collapse-btn">
    <button data-resize-btn>
      <i class="fa-solid fa-angles-right"></i>
      <span>Collapse</span>
    </button>
  </div>

</aside>
