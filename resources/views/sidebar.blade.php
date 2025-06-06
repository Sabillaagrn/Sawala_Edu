<!DOCTYPE html>
<html lang="en">

<!--===============================
          SETTINGAN TEMPLATE
===================================-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawala Edu</title>
  <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">
  <script src="{{ asset('js/siswa.js') }}" defer></script>
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<!--===============================
              LOGO 
===================================-->

<body>
<aside>

  <div class="logo">
    <img src="{{ asset('image/sidebar/sawala_white.png') }}" alt="Sawala Logo" class="logo-img">
    <span class="logo-text">Sawala Edu</span>
  </div>

<!--===============================
              SIDEBAR 
===================================-->
  <nav>
    <ul>
      <li>
        <a href="#">
          <i class="fa-solid fa-chart-line"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{url('/guru') }}">
          <i class="fa-solid fa-chalkboard-user"></i>
          <span>Guru</span>
        </a>
      </li>
      <li>
        <a href="#" class="active"> <!--kalo mau nambahin keselect tambahin class active ini-->
          <i class="fa-solid fa-graduation-cap"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-school"></i>
          <span>Kelola Akun</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </nav>

<!--===============================
COLLAPSE BUTTON DI LUAR NAV BUTTON 
===================================-->

  <div class="collapse-btn">
    <button data-resize-btn>
      <i class="fa-solid fa-angles-right"></i>
      <span>Collapse</span>
    </button>
  </div>
</aside>

<!--===============================
              HEADER 
===================================-->

  <main>
    <div class="header">
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search" />
        <i class="fa fa-search"></i>
      </div>

      <div class="action-buttons" style="display: flex; gap: 12px;">
        <button><i class="fa fa-right-from-bracket"></i> <span>Log out</span></button>
        <button><i class="fa fa-user"></i></button> <!--Profil-->
      </div>
    </div>

<!--===============================
          SCRIPT COLLAPSE 
===================================-->
  <script>
    const ResizeBtn = document.querySelector('[data-resize-btn]');

    ResizeBtn.addEventListener('click',function(e) {
      e.preventDefault();
      document.body.classList.toggle('sb-expanded');
    })
  </script>
</body>
</html>