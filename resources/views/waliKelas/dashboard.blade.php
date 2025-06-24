<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/waliKelas/dashboard.css') }}" />
    <script src="{{ asset('js/waliKelas/dashboard.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="{{ asset('image/Sawala Edu (Default).png') }}" sizes="64x64">

    <title>Dashboard</title>
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

        <div class="content-grid">
                <div class="left-content">
                    <!-- Profile Card -->
                    <div class="profile-card">
                        <div class="profile-header"></div>
                        <button class="more-options">⋯</button>
                        <div class="profile-content">
                            <div class="profile-avatar"></div>
                            <div class="profile-name">Gina Andriana S.Pd</div>
                            <div class="profile-subject">Guru Matematika</div>
                            
                            <div class="profile-details">
                                <div class="detail-item">
                                    <div class="detail-icon class">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="color: #636e72; font-size: 14px;">Wali Kelas:</div>
                                        <div class="detail-text">IX B</div>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon location">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="color: #636e72; font-size: 14px;">Alamat:</div>
                                        <div class="detail-text">Bandung, Indonesia</div>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon phone">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="color: #636e72; font-size: 14px;">Nomor:</div>
                                        <div class="detail-text">089582396792</div>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon email">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="color: #636e72; font-size: 14px;">Email:</div>
                                        <div class="detail-text">Hensa7@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Card -->
                    <div class="chart-card">
                        <h3 class="chart-title">Grafik Kehadiran Siswa</h3>
                        <div class="chart-container">
                            <canvas id="gradeChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="right-content">
                    <div class="schedule-section">
                        <div class="schedule-header">
                            <h2>JADWAL</h2>
                            <p class="schedule-date">Rabu, 27 Mei 2025</p>
                        </div>
                        

                        <div class="schedule-item yellow">
                            <div class="schedule-content">
                                <h3>Ilmu Pengetahuan Alam</h3>
                                <p class="schedule-class">VII A</p>
                                <div class="schedule-time">
                                    <span>📅 27 Mei 2025</span>
                                    <span>🕐 07:00 - 08:30 WIB</span>
                                </div>
                            </div>
                            <div class="schedule-avatar"></div>
                        </div>

                        <div class="schedule-item orange">
                            <div class="schedule-content">
                                <h3>Ilmu Pengetahuan Alam</h3>
                                <p class="schedule-class">VII B</p>
                                <div class="schedule-time">
                                    <span>📅 27 Mei 2025</span>
                                    <span>🕐 10:30 - 12:00 WIB</span>
                                </div>
                            </div>
                            <div class="schedule-avatar"></div>
                        </div>

                        <div class="schedule-item yellow">
                            <div class="schedule-content">
                                <h3>Ilmu Pengetahuan Alam</h3>
                                <p class="schedule-class">IX C</p>
                                <div class="schedule-time">
                                    <span>📅 27 Mei 2025</span>
                                    <span>🕐 13:00 - 14:30 WIB</span>
                                </div>
                            </div>
                            <div class="schedule-avatar"></div>
                        </div>

                        <div class="schedule-item green">
                            <div class="schedule-content">
                                <h3>Ilmu Pengetahuan Alam</h3>
                                <p class="schedule-class">IX A</p>
                                <div class="schedule-time">
                                    <span>📅 27 Mei 2025</span>
                                    <span>🕐 14:30 - 16:00 WIB</span>
                                </div>
                            </div>
                            <div class="schedule-avatar"></div>
                        </div>

                        <button class="view-more-btn">View More</button>
                    </div>
                </div>
            </div>
    
        </div>
    </main>

</body>
</html>