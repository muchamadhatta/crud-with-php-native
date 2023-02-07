<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Cek Kelulusan</title>
  </head>
  <body>
    
  <div class="container" style="margin-top: 80px">
      <div class="row">
                     
        
        <div class="col-md-8 offset-md-2">
          <a href="index.php" class="btn btn-md btn-info" style="margin-bottom: 10px">MENU UTAMA</a>
          <div class="card">
            <div class="card-header">
              CEK KELULUSAN
            </div>

            <div class="card-body">
              <form action="cek_kelulusan.php" method="POST">
                
                <div class="form-group">
                  <label>Masukan Nilai</label>
                  <input type="text" name="ipk" placeholder="Masukkan Nilai Kelulusan" class="form-control">
                </div>

                                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>


  
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
  </body>
</html>