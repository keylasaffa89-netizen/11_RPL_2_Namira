<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Laundry</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0;">

    <br><br>

    <center>
        <h2>SISTEM INFORMASI LAUNDRY</h2>
    </center>

    <br><br>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">

            <?php
            if (isset($_GET['pesan'])) {

                if ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>
                            Login gagal! Username atau Password salah!
                          </div>";

                } elseif ($_GET['pesan'] == 'logout') {
                    echo "<div class='alert alert-success'>
                            Anda telah berhasil Logout!
                          </div>";

                } elseif ($_GET['pesan'] == 'belum_login') {
                    echo "<div class='alert alert-warning'>
                            Anda harus login untuk mengakses halaman admin!
                          </div>";
                }
            }
            ?>

            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="text-center">LOGIN ADMIN</h4>
                </div>

                <div class="panel-body">

                    <form action="login.php" method="post">

                        <div class="form-group">
                            <label>Username</label>
                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan username"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

</body>
</html>
