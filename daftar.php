<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI  PENGADUAN MASYARAKAT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-success">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-4">
            <div class="card p-5 shadow-lg">
                <div class="text-center mb-4">
                    <img src="assets/img/regis.svg" alt="" class="w-50 mb-4">
                    <h5 class="fw-light">DAFTAR BARU</h5>
                </div>
            <form action="scr_daftar.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Kependudukan (NIK)</label>
                    <input type="text" class="form-control border-success" name="nik">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control border-success" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control border-success" name="user">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control border-success" name="pass">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP/Telp</label>
                    <input type="text" class="form-control border-success" name="telp">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control">D A F T A R</button>
                </div>       
                <div class="text-center mb-2">
                   <p class="fw-light">Sudah Punya Akun ?<a href="index.php">MASUK</a></p>
                </div>  
            </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>