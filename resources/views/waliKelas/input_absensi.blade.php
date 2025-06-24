<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/waliKelas/input_absensi.css') }}" />
    <script src="{{ asset('js/waliKelas/input_absensi.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="{{ asset('image/Sawala Edu (Default).png') }}" sizes="64x64">


    <title>Input Absensi</title>
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
        </header>

        
        <!-- Content -->
        <div class="content">
            <!-- Page Title -->
            <h2 class="content-title">
                Input Absensi Siswa
                <span style="font-size: 20px;">📝</span>
            </h2>

            <!-- Controls Section -->
            <div class="controls-section">
                <!-- Filters -->
                <div class="filters">
                    <div class="filter-group">
                        <select class="dropdown" id="kelasSelect">
                            <option value="">Kelas</option>
                            <option value="7A">VII A</option>
                            <option value="7B">VII B</option>
                            <option value="7C">VII C</option>
                            <option value="8A">VIII A</option>
                            <option value="8B">VIII B</option>
                            <option value="8C">VIII C</option>
                            <option value="9A">IX A</option>
                            <option value="9B">IX B</option>
                            <option value="9C">IX C</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <input type="date" class="date-input" id="tanggalInput" value="2024-06-16">
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="stats-cards">
                    <div class="stat-card hadir">
                        <div class="stat-number" id="hadirCount">18</div>
                        <div class="stat-label">Hadir</div>
                    </div>
                    
                    <div class="stat-card sakit">
                        <div class="stat-number" id="sakitCount">2</div>
                        <div class="stat-label">Sakit</div>
                    </div>
                    
                    <div class="stat-card izin">
                        <div class="stat-number" id="izinCount">1</div>
                        <div class="stat-label">Izin</div>
                    </div>
                    
                    <div class="stat-card alfa">
                        <div class="stat-number" id="alfaCount">0</div>
                        <div class="stat-label">Alfa</div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Hadir</th>
                            <th>Izin</th>
                            <th>Sakit</th>
                            <th>Alfa</th>
                            <th>Status hari ini</th>
                        </tr>
                    </thead>
                    <tbody id="siswaTableBody">
                        <tr>
                            <td>Siti Nur Haliza</td>
                            <td>872354898</td>
                            <td>15</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>
                                <select class="status-dropdown hadir" onchange="updateStatus(this)">
                                    <option value="hadir" selected>Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alfa">Alfa</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Ariel Zaki Faza</td>
                            <td>872354898</td>
                            <td>17</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>
                                <select class="status-dropdown izin" onchange="updateStatus(this)">
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin" selected>Izin</option>
                                    <option value="alfa">Alfa</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Naufal Ramadhan</td>
                            <td>872354898</td>
                            <td>20</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                                <select class="status-dropdown alfa" onchange="updateStatus(this)">
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alfa" selected>Alfa</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Naufal Ramadhan</td>
                            <td>872354898</td>
                            <td>20</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                                <select class="status-dropdown alfa" onchange="updateStatus(this)">
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alfa" selected>Alfa</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Naufal Ramadhan</td>
                            <td>872354898</td>
                            <td>20</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                                <select class="status-dropdown alfa" onchange="updateStatus(this)">
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alfa" selected>Alfa</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">></button>
            </div>
        </div>
    </div>
    </main>
</body>
</html>