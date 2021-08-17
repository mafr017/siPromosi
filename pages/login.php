<?php 
require "function.php";
// session_start();
// cek login
if (isset($_POST['login'] )) {
    $email = $_POST['email_user'];
    $password = $_POST['password_user'];

    // cek db
    $cekdb = mysqli_query($conn, "SELECT * FROM pengguna WHERE email_user='$email' AND password_user='$password'");
    // hitung data
    $hitungdb = mysqli_num_rows($cekdb);
    if ($hitungdb > 0) {
        $_SESSION['log'] = 'True';
        echo "
        <script>
          alert('Anda berhasil Login ke sistem!');
          document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
          alert('Anda gagal Login ke sistem!');
          document.location.href = 'login.php';
        </script>
        ";
    };
}

// cek sudah login
if (!isset($_SESSION['log'])) {
} else {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistem Informasi Strategi Promosi CV. CINTEK" />
    <meta name="author" content="Muhammad Adityo Fathur Rahim" />
    <title>Login - SI Promosi CV. CINTEK</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: #efe9cc">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #eadea6;">
                            <div class="card-header text-center py-4">
                                <img src="../assets/img/cintek-logo.png" class="rounded-circle bg-light w-25 p-1 mb-2"
                                    alt="logo cintek">
                                <h3 class="font-weight-light">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email_user" id="inputEmail" type="email"
                                            placeholder="name@example.com" style="background-color: #efe9cc" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password_user" id="inputPassword" type="password"
                                            placeholder="Password" style="background-color: #efe9cc" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <!-- <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                            required />
                                        <label class="form-check-label" for="inputRememberPassword">Remember
                                            Password</label>
                                    </div> -->
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button class="btn" name="login" style="background-color: #DEB881;">Login</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="layoutAuthentication_footer">
            <div class="text-center text-muted p-1" style="background-color: #f6cd90">Copyright &copy; CV. Cihanjuang
                Inti Teknik 2021</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>