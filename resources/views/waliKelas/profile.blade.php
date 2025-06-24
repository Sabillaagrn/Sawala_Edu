<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/waliKelas/profile.css') }}" />
    <script src="{{ asset('js/waliKelas/profile.js') }}" defer></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="{{ asset('image/Sawala Edu (Default).png') }}" sizes="64x64">
    <title>Profile Wali Kelas</title>
</head>
<body>
    <aside>
        <div class="logo">
            <img src="{{ asset('image/image_sidebar/sawala_white.png') }}" alt="Sawala Logo" class="logo-img" />
            <span class="logo-text">Sawala Edu</span>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="{{ url('/waliKelas/dashboard') }}" class="{{ Request::is('waliKelas/dashboard') ? 'active' : '' }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/waliKelas/input_nilai') }}" class="{{ Request::is('waliKelas/input_nilai') ? 'active' : '' }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Input Nilai</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/waliKelas/input_absensi') }}" class="{{ Request::is('waliKelas/input_absensi') ? 'active' : '' }}">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span>Iput Absensi</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/waliKelas/profile') }}" class="{{ Request::is('waliKelas/profile') ? 'active' : '' }}">
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

    <!-- Main Content -->
    <main class="main-content">
        <header class="header">
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search" />
                <i class="fa fa-search"></i>
            </div>

            <div class="action-buttons">
                <a href="{{ url('/login') }}" class="button-link">
                <i class="fa fa-right-from-bracket"></i> <span>Log out</span>
                </a>
                <button class="icon-button">
                <i class="fa fa-user"></i>
                </button>
            </div>
        </header>

        <div class="container-profile">
            <div class="profile-header">
            <div class="profile-banner"></div>

            <div class="profile-picture">
            <img src="{{ asset('image/guru.jpg') }}" alt="Avatar" class="student-avatar">
        </div>

        <div class="profile-menu">
        <div class="dropdown">
            <i class="fas fa-ellipsis-v dropdown-toggle-icon" onclick="toggleDropdown()"></i>
            <div class="dropdown-menu" id="dropdownMenu">
            <a href="#"><i class="fa-solid fa-pen-to-square"></i></i> Edit</a>
            <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a>
            </div>
        </div>
        </div>
    
    <div class="profile-body">
        <h2 class="name">Gina Adriana S.Pd</h2>
        <p class="role">Wali Kelas IX B</p>

        <div class="info-group">
            <div class="info-item"><i class="fas fa-map-marker-alt"></i> Bandung, Indonesia</div>
            <div class="info-item"><i class="fas fa-phone-alt"></i> 087581426812</div>
            <div class="info-item"><i class="fas fa-envelope"></i> Aime98@mail.com</div>
        </div>

        <div class="section">
            <h3><i class="fas fa-user"></i> About:</h3>
            <p>Lorem ipsum dolor sit amet...</p>
        </div>

        <div class="section">
            <h3><i class="fas fa-graduation-cap"></i> Education:</h3>
            <ul>
                <li><strong>History Major</strong>, University Akademi Historia<br><span class="edu-year">2013–2017</span></li>
                <li><strong>Master of History</strong>, University Akademi Historia<br><span class="edu-year">2017–2020</span></li>
            </ul>
        </div>

        <div class="section">
            <h3><i class="fas fa-lightbulb"></i> Expertise:</h3>
            <p>World History, Philosophy, Prehistoric, Culture, Ancient</p>
        </div>
    </div>
</div>


</body>
</html>