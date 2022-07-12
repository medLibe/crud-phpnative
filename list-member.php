<?php include("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Member Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
                        <a class="nav-link active" href="list-member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row ms-3 mt-5">
        <div class="col">
            <a class="btn btn-sm btn-secondary" href="form-daftar.php">
                <i class="bi bi-plus-square"></i> Member</a>
        </div>
    </div>
    <div class="row ms-3 mt-2">
        <div class="col-10">
            <div class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>HP</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                            $sql = "SELECT * FROM daftar_member";
                            $query = mysqli_query($getDB, $sql);

                            while($members = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$members['id']."</td>";
                                echo "<td>".$members['nama_lengkap']."</td>";
                                echo "<td>".$members['hp']."</td>";
                                echo "<td>".$members['alamat']."</td>";
                                echo "<td>".$members['status_member']."</td>";
                                echo "<td>";
                                echo "<a class='btn btn-sm btn-warning' href='form-edit.php?id=".$members['id']."'><i class='bi bi-pencil-square'></i></a> ";
                                echo "<a class='btn btn-sm btn-danger' href='hapus.php?id=".$members['id']."'> <i class='bi bi-trash-fill'></i></a>";
                                echo "</td>";

                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>

                <p>Total Member: <?= mysqli_num_rows($query); ?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>