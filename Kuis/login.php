<html lang="en">
<head>
    <title>HALAMAN LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 12%;
            padding-left: 37%;
        }
    </style>
</head>
<body>
    <div class="card col-md-5">
        <div class="card-header text-justify">
            FORM LOGIN
        </div>
        <div class="card-body">

            <form method="post" action="cek_login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                </div><br>

                <button type="submit" name="masuk" class="btn btn-danger">Masuk</button>
            </form>
            <nav>
            <a href="signup.html">Registrasi Akun</a>
            </nav>
        </div>
    </div>
</body>

</html>