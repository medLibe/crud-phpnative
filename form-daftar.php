<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Arcadia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="list-member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="form-daftar.php">Daftar Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row ms-3 mt-5 fs-3">
        Formulir Pendaftaran Member
    </div>

    <div class="row ms-3 mt-2">
        <div class="col-6">
            <form action="proses-pendaftaran.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label">HP</label>
                    <input type="number" class="form-control" name="hp" placeholder="08xxx" min="0">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="Siswa">Siswa</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Guru">Guru</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                </div>
    
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>