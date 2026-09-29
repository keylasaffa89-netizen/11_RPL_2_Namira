<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>LaundryCare - Sistem Informasi Laundry</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="assets/css/bootstrap.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f7fbff;
            color: #263238;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-custom {
            background: #ffffff;
            border: none;
            border-radius: 0;
            margin: 0;
            padding: 10px 0;

            box-shadow: 0 3px 15px rgba(0,0,0,0.08);

            position: relative;
            z-index: 10;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: bold;
            color: #1597e5 !important;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .navbar-nav > li > a {
            color: #37474f !important;
            font-weight: 600;
            padding: 15px 17px;
        }

        .navbar-nav > li > a:hover {
            background: transparent !important;
            color: #1597e5 !important;
        }

        .login-btn {
            background: #1597e5 !important;
            color: white !important;

            border-radius: 25px;

            padding: 10px 23px !important;

            margin-top: 5px;
        }

        .login-btn:hover {
            background: #087fc7 !important;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 650px;

            position: relative;

            background:
                linear-gradient(
                    90deg,
                    rgba(5,105,170,0.93),
                    rgba(20,151,229,0.72)
                ),
                url("https://images.unsplash.com/photo-1582735689369-4fe89db7114c?auto=format&fit=crop&w=1800&q=85");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;

            color: white;
        }

        .hero-content {
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 56px;
            line-height: 1.15;

            font-weight: 800;

            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #ffe082;
        }

        .hero p {
            font-size: 19px;

            line-height: 1.8;

            max-width: 650px;

            color: #f4fbff;

            margin-bottom: 30px;
        }

        .hero-label {
            display: inline-block;

            background: rgba(255,255,255,0.18);

            border: 1px solid rgba(255,255,255,0.3);

            padding: 9px 18px;

            border-radius: 30px;

            margin-bottom: 20px;

            font-size: 14px;

            font-weight: bold;
        }

        .hero-label i {
            color: #ffe082;
            margin-right: 7px;
        }

        .hero-button {
            display: inline-block;

            padding: 14px 30px;

            background: white;

            color: #128bd5;

            border-radius: 30px;

            font-size: 16px;

            font-weight: bold;

            margin-right: 10px;

            transition: 0.3s;
        }

        .hero-button:hover {
            color: #087fc7;

            text-decoration: none;

            transform: translateY(-3px);
        }

        .hero-button-outline {
            display: inline-block;

            padding: 12px 30px;

            border: 2px solid white;

            color: white;

            border-radius: 30px;

            font-weight: bold;

            transition: 0.3s;
        }

        .hero-button-outline:hover {
            background: white;

            color: #128bd5;

            text-decoration: none;
        }


        /* =========================
           STATS
        ========================= */

        .stats {
            background: white;

            padding: 25px 0;

            box-shadow: 0 5px 20px rgba(0,0,0,0.06);

            position: relative;

            z-index: 5;
        }

        .stat {
            text-align: center;

            border-right: 1px solid #e5e5e5;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat h2 {
            color: #1597e5;

            font-size: 30px;

            font-weight: 800;

            margin: 0 0 5px;
        }

        .stat p {
            color: #78909c;

            margin: 0;
        }


        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 90px 0;
        }

        .section-title {
            text-align: center;

            margin-bottom: 55px;
        }

        .section-title small {
            color: #1597e5;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 2px;
        }

        .section-title h2 {
            color: #17324d;

            font-size: 38px;

            font-weight: 800;

            margin: 12px 0;
        }

        .section-title p {
            color: #78909c;

            max-width: 650px;

            margin: auto;

            line-height: 1.8;
        }


        /* =========================
           SERVICE CARD
        ========================= */

        .service-card {
            background: white;

            border-radius: 15px;

            overflow: hidden;

            margin-bottom: 30px;

            box-shadow:
                0 8px 30px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);

            box-shadow:
                0 15px 40px rgba(0,0,0,0.14);
        }

        .service-image {
            width: 100%;

            height: 210px;

            object-fit: cover;
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            color: #17324d;

            font-weight: bold;

            font-size: 21px;

            margin-top: 0;

            margin-bottom: 12px;
        }

        .service-content p {
            color: #78909c;

            line-height: 1.7;

            margin-bottom: 0;
        }


        /* =========================
           ABOUT
        ========================= */

        .about-section {
            background: #eef8ff;
        }

        .about-image {
            width: 100%;

            height: 450px;

            object-fit: cover;

            border-radius: 20px;

            box-shadow:
                0 15px 40px rgba(0,0,0,0.12);
        }

        .about-content {
            padding: 30px 20px;
        }

        .about-content h2 {
            font-size: 38px;

            font-weight: 800;

            color: #17324d;

            margin-top: 10px;
        }

        .about-content > p {
            color: #607d8b;

            line-height: 1.8;

            margin-top: 20px;
        }

        .check {
            margin-top: 25px;
        }

        .check-item {
            margin-bottom: 18px;

            color: #455a64;

            font-weight: 500;
        }

        .check-item i {
            color: white;

            background: #1597e5;

            width: 28px;
            height: 28px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            margin-right: 10px;
        }


        /* =========================
           WHY US
        ========================= */

        .why-card {
            text-align: center;

            background: white;

            padding: 35px 25px;

            border-radius: 15px;

            margin-bottom: 25px;

            box-shadow:
                0 7px 25px rgba(0,0,0,0.07);
        }

        .why-icon {
            width: 70px;
            height: 70px;

            background: #e4f5ff;

            color: #1597e5;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 28px;

            margin: 0 auto 20px;
        }

        .why-card h3 {
            font-size: 20px;

            font-weight: bold;

            color: #17324d;
        }

        .why-card p {
            color: #78909c;

            line-height: 1.7;
        }


        /* =========================
           PROCESS
        ========================= */

        .process {
            background: #f8fbff;
        }

        .process-number {
            width: 65px;
            height: 65px;

            border-radius: 50%;

            background: #1597e5;

            color: white;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 21px;

            font-weight: bold;

            margin: 0 auto 20px;

            box-shadow:
                0 8px 20px rgba(21,151,229,0.25);
        }

        .process-item {
            text-align: center;

            padding: 20px;
        }

        .process-item h3 {
            color: #17324d;

            font-weight: bold;

            font-size: 20px;
        }

        .process-item p {
            color: #78909c;

            line-height: 1.7;
        }


        /* =========================
           CTA
        ========================= */

        .cta {
            padding: 90px 20px;

            background:
                linear-gradient(
                    rgba(7,126,201,0.92),
                    rgba(21,151,229,0.92)
                ),
                url("https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?auto=format&fit=crop&w=1800&q=80");

            background-size: cover;

            background-position: center;

            text-align: center;

            color: white;
        }

        .cta h2 {
            font-size: 40px;

            font-weight: 800;

            margin-bottom: 15px;
        }

        .cta p {
            font-size: 18px;

            margin-bottom: 30px;

            opacity: 0.95;
        }

        .cta-button {
            display: inline-block;

            background: white;

            color: #128bd5;

            padding: 14px 32px;

            border-radius: 30px;

            font-weight: bold;

            transition: 0.3s;
        }

        .cta-button:hover {
            color: #087fc7;

            text-decoration: none;

            transform: translateY(-3px);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #102a43;

            color: #9fb3c8;

            padding: 50px 0 20px;
        }

        footer h3,
        footer h4 {
            color: white;

            font-weight: bold;
        }

        footer p {
            line-height: 1.8;
        }

        footer a {
            color: #9fb3c8;

            display: block;

            margin-bottom: 10px;
        }

        footer a:hover {
            color: #4fc3f7;

            text-decoration: none;
        }

        .footer-bottom {
            border-top: 1px solid #29445f;

            padding-top: 20px;

            margin-top: 30px;

            text-align: center;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 767px) {

            .hero {
                min-height: 600px;

                text-align: center;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero-button,
            .hero-button-outline {
                display: block;

                width: 85%;

                margin: 10px auto;
            }

            .stat {
                border: none;

                margin: 15px 0;
            }

            .about-image {
                height: 300px;
            }

            .about-content {
                padding-top: 40px;
            }

            .about-content h2 {
                font-size: 30px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .cta h2 {
                font-size: 30px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================
     NAVBAR
===================================== -->

<nav class="navbar navbar-custom">

    <div class="container">

        <div class="navbar-header">

            <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#menu">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <a
                class="navbar-brand"
                href="index.php">

                <i class="fa fa-tint"></i>

                LaundryCare

            </a>

        </div>


        <div
            class="collapse navbar-collapse"
            id="menu">

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="#beranda">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="#layanan">
                        Layanan
                    </a>
                </li>

                <li>
                    <a href="#tentang">
                        Tentang
                    </a>
                </li>

                <li>
                    <a href="#cara">
                        Cara Kerja
                    </a>
                </li>

                <li>
                    <a
                        href="login.php"
                        class="login-btn">

                        <i class="fa fa-sign-in"></i>
                        Login Admin

                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =====================================
     HERO
===================================== -->

<section
    class="hero"
    id="beranda">

    <div class="container">

        <div class="hero-content">

            <span class="hero-label">

                <i class="fa fa-star"></i>

                Sistem Informasi Laundry Modern

            </span>


            <h1>

                Laundry Bersih,
                <br>

                <span>Hidup Lebih Nyaman.</span>

            </h1>


            <p>

                Kelola bisnis laundry dengan mudah.
                Catat pelanggan, transaksi, harga,
                dan laporan dalam satu sistem yang
                sederhana dan terorganisir.

            </p>


            <a
                href="login.php"
                class="hero-button">

                <i class="fa fa-sign-in"></i>

                Mulai Sekarang

            </a>


            <a
                href="#layanan"
                class="hero-button-outline">

                Lihat Layanan

            </a>

        </div>

    </div>

</section>


<!-- =====================================
     STATISTIK
===================================== -->

<section class="stats">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-xs-6">

                <div class="stat">

                    <h2>100+</h2>

                    <p>
                        Pelanggan
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-xs-6">

                <div class="stat">

                    <h2>500+</h2>

                    <p>
                        Transaksi
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-xs-6">

                <div class="stat">

                    <h2>10+</h2>

                    <p>
                        Layanan
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-xs-6">

                <div class="stat">

                    <h2>24/7</h2>

                    <p>
                        Sistem
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     LAYANAN
===================================== -->

<section
    class="section"
    id="layanan">

    <div class="container">

        <div class="section-title">

            <small>
                Layanan Kami
            </small>

            <h2>
                Solusi Lengkap Untuk Laundry
            </h2>

            <p>

                Kelola seluruh kebutuhan laundry
                melalui sistem yang mudah digunakan.

            </p>

        </div>


        <div class="row">


            <!-- SERVICE 1 -->

            <div class="col-md-4">

                <div class="service-card">

                    <img
                        class="service-image"
                        src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?auto=format&fit=crop&w=900&q=80"
                        alt="Laundry">

                    <div class="service-content">

                        <h3>

                            <i
                                class="fa fa-users"
                                style="color:#1597e5;">
                            </i>

                            Data Pelanggan

                        </h3>

                        <p>

                            Kelola data pelanggan dengan
                            mudah sehingga informasi pelanggan
                            tersimpan secara teratur.

                        </p>

                    </div>

                </div>

            </div>


            <!-- SERVICE 2 -->

            <div class="col-md-4">

                <div class="service-card">

                    <img
                        class="service-image"
                        src="https://images.unsplash.com/photo-1582735689369-4fe89db7114c?auto=format&fit=crop&w=900&q=80"
                        alt="Mesin Laundry">

                    <div class="service-content">

                        <h3>

                            <i
                                class="fa fa-shopping-basket"
                                style="color:#1597e5;">
                            </i>

                            Transaksi Laundry

                        </h3>

                        <p>

                            Catat transaksi mulai dari
                            pelanggan, jenis layanan,
                            berat cucian, hingga total harga.

                        </p>

                    </div>

                </div>

            </div>


            <!-- SERVICE 3 -->

            <div class="col-md-4">

                <div class="service-card">

                    <img
                        class="service-image"
                        src="https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&w=900&q=80"
                        alt="Laundry Bersih">

                    <div class="service-content">

                        <h3>

                            <i
                                class="fa fa-bar-chart"
                                style="color:#1597e5;">
                            </i>

                            Laporan

                        </h3>

                        <p>

                            Lihat data transaksi dan
                            laporan laundry untuk membantu
                            pengelolaan usaha.

                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================
     TENTANG
===================================== -->

<section
    class="section about-section"
    id="tentang">

    <div class="container">

        <div class="row">


            <div class="col-md-6">

                <img
                    class="about-image"
                    src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f?auto=format&fit=crop&w=1000&q=85"
                    alt="Laundry">

            </div>


            <div class="col-md-6">

                <div class="about-content">

                    <small
                        style="
                            color:#1597e5;
                            font-weight:bold;
                            letter-spacing:2px;
                        ">

                        TENTANG SISTEM

                    </small>


                    <h2>

                        Kelola Laundry
                        Lebih Mudah.

                    </h2>


                    <p>

                        LaundryCare merupakan sistem informasi
                        laundry yang dirancang untuk membantu
                        pengelolaan aktivitas laundry secara
                        lebih terstruktur.

                    </p>


                    <div class="check">

                        <div class="check-item">

                            <i class="fa fa-check"></i>

                            Pengelolaan data pelanggan

                        </div>


                        <div class="check-item">

                            <i class="fa fa-check"></i>

                            Pencatatan transaksi

                        </div>


                        <div class="check-item">

                            <i class="fa fa-check"></i>

                            Pengaturan harga laundry

                        </div>


                        <div class="check-item">

                            <i class="fa fa-check"></i>

                            Laporan transaksi

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================
     KEUNGGULAN
===================================== -->

<section class="section">

    <div class="container">

        <div class="section-title">

            <small>
                Keunggulan
            </small>

            <h2>
                Kenapa Menggunakan LaundryCare?
            </h2>

        </div>


        <div class="row">


            <div class="col-md-4">

                <div class="why-card">

                    <div class="why-icon">

                        <i class="fa fa-bolt"></i>

                    </div>

                    <h3>
                        Cepat
                    </h3>

                    <p>

                        Proses pencatatan transaksi
                        menjadi lebih cepat dan praktis.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="why-card">

                    <div class="why-icon">

                        <i class="fa fa-database"></i>

                    </div>

                    <h3>
                        Terorganisir
                    </h3>

                    <p>

                        Data pelanggan dan transaksi
                        tersimpan dengan lebih terstruktur.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="why-card">

                    <div class="why-icon">

                        <i class="fa fa-line-chart"></i>

                    </div>

                    <h3>
                        Mudah Dipantau
                    </h3>

                    <p>

                        Data transaksi dapat digunakan
                        untuk membantu membuat laporan.

                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================
     CARA KERJA
===================================== -->

<section
    class="section process"
    id="cara">

    <div class="container">

        <div class="section-title">

            <small>
                Cara Kerja
            </small>

            <h2>
                Empat Langkah Sederhana
            </h2>

            <p>

                Proses pengelolaan laundry menjadi
                lebih mudah dan teratur.

            </p>

        </div>


        <div class="row">


            <div class="col-md-3">

                <div class="process-item">

                    <div class="process-number">
                        01
                    </div>

                    <h3>
                        Pelanggan
                    </h3>

                    <p>
                        Masukkan data pelanggan
                        ke dalam sistem.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="process-item">

                    <div class="process-number">
                        02
                    </div>

                    <h3>
                        Transaksi
                    </h3>

                    <p>
                        Catat layanan laundry
                        dan pesanan pelanggan.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="process-item">

                    <div class="process-number">
                        03
                    </div>

                    <h3>
                        Proses
                    </h3>

                    <p>
                        Laundry diproses sampai
                        selesai dikerjakan.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="process-item">

                    <div class="process-number">
                        04
                    </div>

                    <h3>
                        Laporan
                    </h3>

                    <p>
                        Transaksi dapat dipantau
                        melalui laporan.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================
     CTA
===================================== -->

<section class="cta">

    <div class="container">

        <h2>
            Siap Mengelola Laundry?
        </h2>

        <p>

            Mulai gunakan sistem informasi laundry
            untuk pengelolaan yang lebih mudah.

        </p>


        <a
            href="login.php"
            class="cta-button">

            <i class="fa fa-sign-in"></i>

            Login ke Sistem

        </a>

    </div>

</section>


<!-- =====================================
     FOOTER
===================================== -->

<footer>

    <div class="container">

        <div class="row">


            <div class="col-md-6">

                <h3>

                    <i class="fa fa-tint"></i>

                    LaundryCare

                </h3>

                <p>

                    Sistem Informasi Laundry untuk
                    membantu mengelola pelanggan,
                    transaksi, harga, dan laporan
                    secara lebih mudah.

                </p>

            </div>


            <div class="col-md-3">

                <h4>
                    Navigasi
                </h4>

                <a href="#beranda">
                    Beranda
                </a>

                <a href="#layanan">
                    Layanan
                </a>

                <a href="#tentang">
                    Tentang
                </a>

                <a href="#cara">
                    Cara Kerja
                </a>

            </div>


            <div class="col-md-3">

                <h4>
                    Sistem
                </h4>

                <a href="login.php">
                    Login Admin
                </a>

            </div>


        </div>


        <div class="footer-bottom">

            <p>

                &copy;
                <?php echo date("Y"); ?>

                LaundryCare.
                All Rights Reserved.

            </p>

        </div>

    </div>

</footer>


</body>

</html>
