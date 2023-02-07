<?php 
  
  include('koneksi.php');
  

  
  // $id = $_GET['id'];
  
  // $query = "SELECT * FROM customer WHERE kdcustomer = $id LIMIT 1";

  // $result = mysqli_query($connection, $query);

  // $row = mysqli_fetch_array($result);

  


  $id = $_GET['id'];
  $query = "SELECT * FROM customer WHERE id = ? LIMIT 1";

  $stmt = mysqli_prepare($connection, $query);
  
  mysqli_stmt_bind_param($stmt, "i", $id);
  
  mysqli_stmt_execute($stmt);
  
  $result = mysqli_stmt_get_result($stmt);
  
  $row = mysqli_fetch_array($result);


//   $id = $_GET['id'];
// $query = "SELECT * FROM customer WHERE kdcustomer = ? LIMIT 1";

// $stmt = mysqli_prepare($connection, $query);

// mysqli_stmt_bind_param($stmt, "s", $id);

// mysqli_stmt_execute($stmt);

// $result = mysqli_stmt_get_result($stmt);

// $row = mysqli_fetch_array($result);



  
  
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Customer</title>
  </head>

  <body>
<?php //echo var_dump($id) ?>
<?php //echo var_dump($row) ?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CUSTOMER
            </div>
            <div class="card-body">
              <form action="update-customer.php" method="POST">

            
              <div class="form-group">
                  <label>Kode Customer</label>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  <input type="text" name="kdcustomer" value="<?php echo $row['kdcustomer'] ?>" placeholder="Masukkan Kode Customer" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nmcustomer" value="<?php echo $row['nmcustomer'] ?>" placeholder="Masukkan Nama Customer" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" value="<?php echo $row['kota'] ?>" placeholder="Masukkan Kota" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
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