<?php
function CekValiditasData($x, $min, $max) {
  if ($min <= $x && $x < $max) {
    return 1;
  } else {
    return 0;
  }
}

if (isset($_POST['ipk'])) {
  $ipk = $_POST['ipk'];

  if (CekValiditasData($ipk, 0, 4.00) && CekValiditasData($ipk, 2.75, 4.01)) {
    echo "IPK yang dimasukkan valid, Anda LULUS";
  } else {
    echo "IPK yang dimasukkan tidak valid, Anda TIDAK LULUS";
  }
}
?>
