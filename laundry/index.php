<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Laundry</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }

        .navbar {
            border-radius: 0;
            margin-bottom: 0;
        }

        .hero {
            min-height: 500px;
            background: linear-gradient(
                rgba(0, 123, 255, 0.85),
                rgba(0, 86, 179, 0.9)
            );
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero p {
            font-size: 20px;
            margin-top: 20px;
        }

        .btn-login {
            margin-top: 25px;
            padding: 12px 30px;
            font-size: 18px;
        }

        .features {
            padding: 60px 0;
        }

        .feature-box {
            background: white;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            text-align: center;
        }

        .feature-box h3 {
            color: #337ab7;
        }

        footer {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    LAUNDRY
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="loginpage.php">
                        Login Admin
                    </a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="container">

            <h1>SISTEM INFORMASI LAUNDRY</h1>

            <p>
                Kelola data pelanggan, transaksi, harga,
                dan laporan laundry dengan mudah.
            </p>

            <a href="loginpage.php"
               class="btn btn-warning btn-lg btn-login">
                Login Admin
            </a>

        </div>

    </section>


    <!-- FITUR -->
    <section class="features">

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="feature-box">

                        <h3>Data Pelanggan</h3>

                        <p>
                            Mengelola data pelanggan laundry
                            dengan lebih mudah dan terorganisir.
                        </p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="feature-box">

                        <h3>Transaksi</h3>

                        <p>
                            Mencatat dan mengelola transaksi
                            laundry secara cepat.
                        </p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="feature-box">

                        <h3>Laporan</h3>

                        <p>
                            Melihat laporan transaksi laundry
                            dengan lebih praktis.
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; <?php echo date("Y"); ?>
            Sistem Informasi Laundry
        </p>

    </footer>

</body>
</html>
