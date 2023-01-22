<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }} ">
</head>
<body>
    <div class="container-login">
        <img src="{{ asset('src/img/logo BTN 1.svg') }}" alt="">
        <div class="inner-login">
            <div class="left-login">
                <h1>BTN Outlet</h1>
                <p id="judul-atas">Kantor Wilayah III Surabaya</p>
                <img width="932" height="521" src=" {{ asset('src/img/vector.svg') }}" alt="">
                <div class="loc">
                    <p id="judul-bawah">Kantor Wilayah III Bank Tabungan Negara </p>
                    <p id="det-loc">Jl. Pemuda No.50, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</p>
                </div>
            </div>
            <div class="right-login">
                <div class="container-form">
                    <p>Hello Admin!</p>
                    <h2 id="sign">Sign in</h2>
                    <form action="/login" method="post">
                        @csrf
                        <label for="">
                            Username
                            <input type="text" id="user_name" placeholder="Masukkan Username" name="user_name">
                        </label>
                        Password
                        <div class="password">
                            <label for="">
                                <input type="password" placeholder="Masukkan Password" id="password" name="password">
                            </label>
                            <img src=" {{ asset('src/img/akar-icons_eye-open.svg') }}" alt="">
                        </div>
                        

                        <input type="submit" value="Sign in">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>