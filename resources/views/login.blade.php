<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/login/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edula-Masuk</title>
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            {{-- IF ERROR fail RETURN HANDEL  --}}
            <form id="loginForm" action="{{ route('login') }}" class="sign-in-form" method="POST">
                @csrf
                <h2 class="title">Masuk</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="USERNAME">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="PASSWORD">
                </div>
                <input type="submit" value="Masuk" class="btn btn-primary">
                <p class="social-text">Atau Masuk dengan Sosial Media</p>
                @if (session('faill'))
                    <p class="text-alert alert-danger">
                        {{ session('faill') }}
                    </p>
                @endif
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Tidak ada akun? <a href="#" id="sign-up-btn2 btn-primary">Daftar</a></p>
            </form>
            <form id="registerForm" action="{{ route('register') }}" class="sign-up-form" method='POST'>
                @csrf
                <h2 class="title">Daftar</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="USERNAME">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" name="EMAIL">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="PASSWORD">
                </div>
                <input type="submit" value="Daftar" class="btn btn-primary">
                <p class="social-text">Atau Masuk dengan Sosial Media</p>
                @if (session('failr'))
                    <p class="text-alert alert-danger">
                        {{ session('failr') }}
                    </p>
                @endif
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Sudah punya akun? <a href="#" id="sign-in-btn2">Masuk</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Sudah memiliki Akun?</h3>
                    <p>Masuk ke akunmu dan belajar bersama Edula!</p>
                    <button class="btn btn-primary" id="sign-in-btn">Masuk</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Belum memiliki Akun?</h3>
                    <p>Daftar sekarang untuk bergabung dan belajar bersama di Edula!</p>
                    <button class="btn btn-primary" id="sign-up-btn">Daftar</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>


    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>



    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");
        const sign_in_btn2 = document.querySelector("#sign-in-btn2");
        const sign_up_btn2 = document.querySelector("#sign-up-btn2");
        const trigger = window.location.hash.substring(1);
        if (trigger == "sign-up-btn") {
            console.log(trigger)
            setTimeout(() => {
                container.classList.add("sign-up-mode");
            }, 100);
        }

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });

        sign_up_btn2.addEventListener("click", () => {
            container.classList.add("sign-up-mode2");
        });

        sign_in_btn2.addEventListener("click", () => {
            container.classList.remove("sign-up-mode2");
        });
    </script>
</body>

</html>
