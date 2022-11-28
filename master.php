<?php

include('conection.php');
$sql = "SELECT * FROM tabel_item";

$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <title>Database Harga Laptop</title>
    <link rel="icon" type="image/x-icon" href="image/ikon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    
  </head>
  <body>
    <header class="p-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="image/ikon.png" class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" style="width="40" height="40" "alt="...">
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="master.php" class="nav-link px-2 text-white">Master Data</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
          </ul>
        
        </div>
      </div>
    </header>
    
    <div class="container-fluid">
      <div class="row">
            <div class="col">
                <h1>Database Laptop</h1>
            </div>
        </div>

      <div class="row p-2">
          <div class="col p-2">
            <div class="card" >
              <table class="table table-bordered" id="tabel_id">
                  <thead>
                      <th>Gambar</th>
                      <th>Nama Laptop</th>
                      <th>Harga</th>
                      <th>Spesifikasi</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr class="">
                              <td><img style="widht:100px;height:100px;"src="<?php echo $row["img"]; ?>" alt=""> </td>
                              <td><?php echo $row["nama"]; ?></td>
                              <td><?php echo $row["price"]; ?></td>
                              <td><?php echo $row["desc"]; ?></td>
                              <td>
                                  <a href="/tubes/delete_item.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">
                                      <i class="bi bi-trash"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <script>
        $(document).ready( function () {
            // $('#tabel_id').DataTable();
            console.log('tes');
        } );
    </script>
  </body>
</html>