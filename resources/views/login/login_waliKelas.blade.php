<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="{{ asset('js/login.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Sawala Edu</title>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="tagline">For Parents, For Education, and For the Future</div>
            <div class="subtitle">Sawala Edu</div>
            <div class="ilustration">
                <img src="{{ url('image/image_login/icon_login.png') }}" alt="Icon login">
            </div>
        </div>
    
        <div class="right-section">
            <div class="login-container fade-in-up">
                <div class="logo-section fade-in-up">
                    <div class="logo-wrapper">
                        <div class="logo">
                        <img src="{{ url('image/image_login/Sawala_Edu.png') }}" alt="Sawala Edu">
                    </div>
                    <h1 class="logo-text">Sawala Edu</h1>
                    </div>
                </div>

                 <form id="loginForm" action="/login" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group">
                        <label for="nisOrSiswa" class="form-label">NIP</label>
                        <input type="text" id="nisOrSiswa" name="nis_siswa" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-input" required>
                    </div>

                    <div class="checkbox-container">
                        <div class="checkbox-group">
                            <label class="toggle-switch">
                                <input type="checkbox" name="remember_me">
                                <span class="slider"></span>
                            </label>
                            <span>Remember Me</span>
                        </div>
                        <a href="/forgot-password" class="forgot-password">Lupa Password</a>
                    </div>

                    <div class="button-group fade-in-up">
                        <button type="submit" class="btn-submit">Login</button>
                    </div>

                    <div class="alternate-login">
                        <p>
                            <a href="{{ route('login_waliKelas') }}">Login sebagai Orang Tua</a> | 
                            <a href="{{ route('login_admin') }}">Login sebagai Admin</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    
    </body>
</html>