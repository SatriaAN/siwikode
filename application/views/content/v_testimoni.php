<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Wisata Kota Depok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body>
   

    <!-- Breadcrumb -->
    <div aria-label="breadcrumb" class="breadcrumb d-flex justify-content-end p-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Testimoni Tempat Wisata</li>
        </ol>
    </div>

    <section style="margin-top: -35px; margin-bottom: 50px;">
        <h2 class="rounded-top">
            Kelola Data Testimoni Tempat Wisata
        </h2>

        <div style="overflow-x: auto;">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Wisata</th>
                        <th>Status</th>
                        <th>Testimoni</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                    $count = 0;
                    foreach ($queryAllTest as $row) {
                        $count = $count + 1;
                   ?>    
                    <tr> 
                        <th><?php echo $count ?></th>
                        <th><?php echo $row->nama ?></th>
                        <th><?php echo $row->wisata_id ?></th>
                        <th><?php echo $row->profesi_id ?></th>
                        <th><?php echo $row->komentar ?></th>
                        <th><?php echo $row->rating ?></th>
                        <th><a href="<?php echo base_url('')?>">Edit</a> | <a href="<?php echo base_url('index.php/testimoni/fungsiDelete/').$row->id?>">Delete</a></th> 
                    </tr>
                   <?php } ?>
                    
                    
                </tbody>
            </table>
            <a href="tambah_testimoni.html">
                <button name="daftar" type="submit" class="btn btn-secondary">Tambah Baru</button></a>
            <br><br><br>
        </div>
    </section>


    <footer>
        <p>Develop By Kelompok 1 TI01 @STT-NF 2021</p>
    </footer>

</body>

</html>