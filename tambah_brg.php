<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

 </head>
  <body>
   <div class="container">
    <h1>Tambah barang</h1>
   <form action="proses_tambah_brg.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">kode barang</label>
    <input type="text" class="form-control" id="kode" aria-describedby="emailHelp" name="kode">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">nama barang</label>
    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">merek</label>
    <input type="text" class="form-control" id="merek" name="merek">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah">
  </div>
    <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>