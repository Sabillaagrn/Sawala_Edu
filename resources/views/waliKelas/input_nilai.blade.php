<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/waliKelas/input_nilai.css') }}" />
    <script src="{{ asset('js/waliKelas/input_nilai.js') }}" defer></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="{{ asset('image/Sawala Edu (Default).png') }}" sizes="64x64">
    <title>Input Nilai Siswa</title>
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

        <!-- Content -->
        <div class="content">
            <!-- Tabs -->
            <div class="tabs">
                <button class="tab active" data-tab="input">
                    <i class="fas fa-edit"></i>
                    Input nilai siswa
                </button>
                <button class="tab" data-tab="detail">
                    <i class="fas fa-list"></i>
                    Detail input siswa
                </button>
            </div>

            <!-- Form -->
            <div class="form-container" id="inputTab">
                <form id="inputNilaiForm">
                    <div class="form-group">
                        <label for="nisSiswa">NIS/Nama Siswa</label>
                        <input type="text" id="nisSiswa" name="nis_siswa" placeholder="Masukkan NIS atau nama siswa">
                    </div>

                    <div class="form-group">
                        <label for="mataPelajaran">Mata Pelajaran</label>
                        <div class="custom-select">
                            <select id="mataPelajaran" name="mata_pelajaran" required>
                                <option value="">Pilih mata pelajaran</option>
                                <option value="matematika">Matematika</option>
                                <option value="bahasa_indonesia">Bahasa Indonesia</option>
                                <option value="bahasa_inggris">Bahasa Inggris</option>
                                <option value="ipa">IPA (Ilmu Pengetahuan Alam)</option>
                                <option value="ips">IPS (Ilmu Pengetahuan Sosial)</option>
                                <option value="pkn">PKN (Pendidikan Kewarganegaraan)</option>
                                <option value="pjok">PJOK (Pendidikan Jasmani)</option>
                                <option value="seni_budaya">Seni Budaya</option>
                                <option value="prakarya">Prakarya</option>
                                <option value="pai">PAI (Pendidikan Agama Islam)</option>
                                <option value="fisika">Fisika</option>
                                <option value="kimia">Kimia</option>
                                <option value="biologi">Biologi</option>
                                <option value="sejarah">Sejarah</option>
                                <option value="geografi">Geografi</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="sosiologi">Sosiologi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jenisPenilaian">Jenis Penilaian</label>
                        <div class="custom-select">
                            <select id="jenisPenilaian" name="jenis_penilaian" required>
                                <option value="">Pilih jenis penilaian</option>
                                <option value="quiz">Quiz</option>
                                <option value="nilai_harian">Nilai Harian</option>
                                <option value="uts">UTS (Ujian Tengah Semester)</option>
                                <option value="uas">UAS (Ujian Akhir Semester)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputNilai">Input Nilai</label>
                            <input type="number" id="inputNilai" name="nilai" min="0" max="100" placeholder="0-100" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <div class="date-input">
                                <input type="date" id="tanggal" name="tanggal" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                </form>
            </div>

            <!-- Detail Input Siswa -->
            <div class="detail-container" id="detailTab">
                <table class="detail-table">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Tanggal</th>
                            <th>Mapel</th>
                            <th>Nilai</th>
                            <th>Jenis penilaian</th>
                            <th>Status input</th>
                        </tr>
                    </thead>
                    <tbody id="detailTableBody">
                        <tr>
                            <td><strong>Siti Nur Haliza</strong></td>
                            <td>872354898</td>
                            <td>14/04/2024</td>
                            <td><span class="subject-badge">Matematika</span></td>
                            <td><span class="score-badge">85</span></td>
                            <td><span class="assessment-badge">Quiz</span></td>
                            <td><span class="status-badge status-done">Done</span></td>
                        </tr>
                        <tr>
                            <td><strong>Ariel Zaki Faza</strong></td>
                            <td>872354898</td>
                            <td>17/04/2024</td>
                            <td><span class="subject-badge">B. Indonesia</span></td>
                            <td><span class="score-badge">80</span></td>
                            <td><span class="assessment-badge">UTS</span></td>
                            <td><span class="status-badge status-done">Done</span></td>
                        </tr>
                        <tr>
                            <td><strong>Naufal Ramadhan</strong></td>
                            <td>872354898</td>
                            <td>17/04/2024</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td><span class="status-badge status-progress">On progress</span></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="pagination-btn nav">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn nav">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>