<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="{{ asset('css/css_admin/dashboard.css') }}" />
  <script src="{{ asset('js/js_admin/dashboard.js') }}" defer></script>
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <title>Sawala Edu</title>
</head>
<body class="page-transition">
  <aside>
    <div class="logo">
      <img src="{{ asset('image/image_sidebar/sawala_white.png') }}" alt="Sawala Logo" class="logo-img" />
      <span class="logo-text">Sawala Edu</span>
    </div>

    <nav>
      <ul>
        <li>
          <a href="{{ url('/dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('/guru') }}" class="{{ Request::is('guru') ? 'active' : '' }}">
            <i class="fa-solid fa-chalkboard-user"></i>
            <span>Guru</span>
          </a>
        </li>
        <li>
          <a href="#">
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

    <div class="collapse-btn">
      <button data-resize-btn>
        <i class="fa-solid fa-angles-right"></i>
        <span>Collapse</span>
      </button>
    </div>
  </aside>

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

    <!-- Top Section -->
    <div class="top-section">
      <!-- Left Content -->
      <div class="left-content">
        <!-- Stat Card -->
        <div class="stats-container">
          <div class="stat-card guru card">
            <div class="stat-icon-guru">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="stat-content">
              <h3>37</h3>
              <p>Total Guru</p>
            </div>
          </div>

          <div class="stat-card siswa card">
            <div class="stat-icon-siswa">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
              </svg>
            </div>
            <div class="stat-content">
              <h3>124</h3>
              <p>Total Siswa</p>
            </div>
          </div>
        </div>

        <!-- Main Table Section -->
        <div class="table-section card">
          <div class="table-container">
            <div class="jadwal-kelas-header">
              <div class="table-header">
                <div class="header-icon">
                  <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v8H4V8z" />
                  </svg>
                </div>
                <h3>Jadwal Kelas</h3>
              </div>
            </div>

            <div class="table-content " >
              <table class="data-table">
              <tbody>
                <!-- Row 1 -->
                <tr class="card">
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">H</div>
                      <div class="teacher-details">
                        <h4>Hendra Saputra</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19780512200101</td>
                  <td><span class="class-badge viii">VIII A</span></td>
                  <td class="subject-cell">Matematika</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>
                <!-- Row 2 -->
                <tr class="card">
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">S</div>
                      <div class="teacher-details">
                        <h4>Siti Rahmawati</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19830315200501</td>
                  <td><span class="class-badge vii">VII B</span></td>
                  <td class="subject-cell">Bahasa Indonesia</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>
                <!-- Row 3 -->
                <tr class="card">
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">A</div>
                      <div class="teacher-details">
                        <h4>Andi Prasetyo</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19820620200701</td>
                  <td><span class="class-badge ix">IX A</span></td>
                  <td class="subject-cell">Bahasa Inggris</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>
                <!-- Row 4 -->
                <tr class="card">
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">N</div>
                      <div class="teacher-details">
                        <h4>Nurul Hidayati</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19791002200601</td>
                  <td><span class="class-badge viii">VIII B</span></td>
                  <td class="subject-cell">Ilmu Pengetahuan Alam</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>
                <!-- Row 5 -->
                <tr class="card">
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">Y</div>
                      <div class="teacher-details">
                        <h4>Yoga Permana</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19800628200501</td>
                  <td><span class="class-badge ix">IX B</span></td>
                  <td class="subject-cell">Pendidikan Jasmani</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>

                <tr>
                  <td>
                    <div class="teacher-info">
                      <div class="teacher-avatar">Y</div>
                      <div class="teacher-details">
                        <h4>Yoga Permana</h4>
                        <p>S.Pd</p>
                      </div>
                    </div>
                  </td>
                  <td class="student-id">19800628200501</td>
                  <td><span class="class-badge ix">IX B</span></td>
                  <td class="subject-cell">Pendidikan Jasmani</td>
                  <td><button class="action-btn">⋯</button></td>
                </tr>
              </tbody>
            </table>
            </div>

            <div class="pagination">
              <div class="pagination-info">Showing 1-5 from 100 data</div>
              <div class="pagination-controls">
                <button class="arrow-button prev" disabled>&#x276E;‹</button>
                <div class="page-numbers"></div>
                <button class="arrow-button next">&#x276F;›</button>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end of left-content -->

      <!-- Schedule Sidebar -->
      <div class="schedule-sidebar">
        <div class="schedule-header card">
          <h3>JADWAL</h3>
          <p class="schedule-date">Rabu, 27 Mei 2025</p>
        </div>

        <div class="schedule-item vii card">
          <div class="schedule-content">
            <h4>Ilmu Pengetahuan Alam</h4>
            <p class="schedule-class">VII A</p>
            <div class="schedule-time">
              27 Mei 2025
            </div>
            <div class="schedule-time">
              07.00 - 08.30 WIB
            </div>
          </div>
          <div class="schedule-avatar"></div>
        </div>

        <div class="schedule-item viii card">
          <div class="schedule-content">
            <h4>Ilmu Pengetahuan Alam</h4>
            <p class="schedule-class">VIII B</p>
            <div class="schedule-time">27 Mei 2025</div>
            <div class="schedule-time">10.30 - 12.00 WIB</div>
          </div>
          <div class="schedule-avatar"></div>
        </div>

        <div class="schedule-item ix card">
          <div class="schedule-content">
            <h4>Ilmu Pengetahuan Alam</h4>
            <p class="schedule-class">IX C</p>
            <div class="schedule-time">27 Mei 2025</div>
            <div class="schedule-time">13.00 - 14.30 WIB</div>
          </div>
          <div class="schedule-avatar"></div>
        </div>

        <div class="schedule-item ix card">
          <div class="schedule-content">
            <h4>Ilmu Pengetahuan Alam</h4>
            <p class="schedule-class">IX C</p>
            <div class="schedule-time">27 Mei 2025</div>
            <div class="schedule-time">13.00 - 14.30 WIB</div>
          </div>
          <div class="schedule-avatar"></div>
        </div>

        <div class="view-more">
          <button class="view-more-btn">
            <a>view more</a>
          </button>
        </div>
        
      </div> <!-- end of schedule-sidebar -->
    </div> <!-- end of top-section -->
  </main>
</body>
</html>
