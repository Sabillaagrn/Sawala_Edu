<aside>

  <div class="logo">
    <img src="{{ asset('image/sidebar/sawala_white.png') }}" alt="Sawala Logo" class="logo-img">
    <span class="logo-text">Sawala Edu</span>
  </div>

  <nav>
    <ul>
      <li>
        <a href="{{ url('/parents/dashboard') }}" class="@if(Request::is('parents/dashboard*')) active @endif">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/parents/laporan-nilai') }}" class="@if(Request::is('/parents/laporan-nilai*')) active @endif">
          <i class="fa-solid fa-chart-column"></i>
          <span>Laporan Nilai</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/parents/absensi') }}" class="@if(Request::is('/parents/absensi*')) active @endif">
          <i class="fa-solid fa-users"></i>
          <span>Absensi</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/parents/profile') }}" class="@if(Request::is('/parents/profile*')) active @endif">
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
