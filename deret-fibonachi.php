<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Deret Fibonachi</title>
  </head>

  <body>


    <div class="container" style="margin-top: 80px">
      <div class="row">
                     
        
        <div class="col-md-8 offset-md-2">
          <a href="index.php" class="btn btn-md btn-info" style="margin-bottom: 10px">MENU UTAMA</a>
          <div class="card">
            <div class="card-header">
              DERET FIBONACHI
            </div>

            <div class="card-body">
              <form action="" method="POST">
                
                <div class="form-group">
                  <label>Masukan Angka Pertama</label>
                  <input type="text" name="angka1" placeholder="Masukkan Nilai" class="form-control">
                </div>
                <div class="form-group">
                  <label>Masukan Jumlah Angka</label>
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control">
                </div>
                                
                <button type="submit" value="Tampilkan" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
              <?php
      if (isset($_POST['angka1']) && isset($_POST['jumlah'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = 1;
        $hasil = 0;

        if ($_POST['jumlah'] == 1) {
          echo "$angka1";
        } else {
          echo "$angka1 $angka2 ";
          for ($i = 0; $i < $_POST['jumlah'] - 2; $i++) {
            $hasil = $angka1 + $angka2;
            echo "$hasil ";

            $angka1 = $angka2;
            $angka2 = $hasil;
          }
        }
      }
    ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
  </body>
</html>