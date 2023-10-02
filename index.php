<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="row" style="background-color: #00004d;">
      <div class="col p-3" style="color: white">
        <h1>Form Sederhana</h1>
      </div>
    </div>
    <br>
    <div class="row">
      <!--
        jangan lupa untuk mengganti name="" sesuai kebutuhan inputan
      -->
      <form action="index.php" method="post">
        <!-- setiap inputan gunakan block ini -->
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="email">
          </div>
        </div>
        <!-- sampai sini -->
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nama">
          </div>
        </div>
        <!-- jika diminta menampilkan combo box dari array -->
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Hobi</label>
          <div class="col-sm-4">
            <select name="hobi" class="form-select">
              <option value="-">--- Silahkan Pilih Hobi Anda ---</option>
              <?php
              $hobi = array('Renang', 'Membaca', 'Belajar', 'Nonton');
              sort($hobi);
              foreach ($hobi as $key => $value) {
                echo "<option value='$value'>$value</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="alamat" >
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-4 offset-md-2">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
          </div>
        </div>
      </form>
    </div>
    <hr>

    <!-- jika diminta menampilkan isian dari data yang disubmit -->
    <?php
    if (isset($_POST['submit'])) {
      // ambil nilai dari form
      $email = $_POST['email'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $hobi = $_POST['hobi'];
    ?>
      <div class="row">
        <?php echo $email; ?>
      </div>
      <div class="row">
        <?php echo $nama; ?>
      </div>
      <div class="row">
        <?php echo $alamat; ?>
      </div>
      <div class="row">
        <?php echo $hobi; ?>
      </div>
    <?php } ?>

  </div>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
