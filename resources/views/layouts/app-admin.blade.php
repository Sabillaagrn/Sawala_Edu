<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sawala Edu')</title>

  <link rel="stylesheet" href="{{ asset('css/app-admin.css') }}">
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  @stack('styles')
  @yield('head')
</head>

<body class="@yield('body-class')">

  @include('partials.sidebar-admin')

<main>

<div class="topbar">
  <div class="header">

    @if (View::hasSection('page-title'))
      <div class="left-title">
        @yield('page-title')
      </div>
    @else
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
    @endif

<div class="header-actions">
  <button type="button">
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
    <span>Log out</span>
  </button>

  <button class="icon-btn">
    <i class="fa-regular fa-user"></i>
  </button>
</div>


  </div>
</div>

  <div class="main-content">
    <div class="content">
      @yield('content')
    </div>
  </div>

</main>

<script src="{{ asset('js/siswa.js') }}"></script>
<script>
  const ResizeBtn = document.querySelector('[data-resize-btn]');
  if (ResizeBtn) {
    ResizeBtn.addEventListener('click', function (e) {
      e.preventDefault();
      document.body.classList.toggle('sb-expanded');
    });
  }
</script>

@stack('scripts')
@yield('scripts')

</body>
</html>
