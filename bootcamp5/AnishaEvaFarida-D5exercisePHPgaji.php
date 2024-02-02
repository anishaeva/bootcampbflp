<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercise PHP Perhitungan Gaji</title>
</head>

<body>
  <h3>Exercise PHP Perhitungan Gaji</h3>
  <form action="" class="row" id="grade-form" method="POST">
    <label for="gaji">Gaji Pokok</label>
    <input type="number" name="gaji" id="" >
    <br>
    <label for="tunjangan">Tunjangan</label>
    <input type="number" name="tunjangan" id="">
    <br>
    <label for="potongan">Potongan</label>
    <input type="number" name="potongan" id="">
    <br>
    <input type="submit" name="submit" id="">
  </form>         

  <?php
  $inputGaji = 0;
  $inputTunjangan = 0;
  $inputPotongan = 0;

  if (!empty((int)$_POST['gaji']) && is_numeric((int)$_POST['gaji']) && (int)$_POST['gaji'] > 0) {
    $inputGaji = (int)$_POST['gaji'];
  } else {
    echo "Input Gaji Tidak Sesuai <br>";
    
  }

  if (!empty((int)$_POST['tunjangan']) && is_numeric((int)$_POST['tunjangan']) && (int)$_POST['tunjangan'] > 0) {
    $inputTunjangan = (int)$_POST['tunjangan'];
  } else {
    echo "Input Tunjangan Tidak Sesuai <br>";
  }

  if (!empty((int)$_POST['potongan']) && is_numeric((int)$_POST['potongan']) && (int)$_POST['potongan'] > 0) {
    $inputPotongan = (int)$_POST['potongan'];
  } else {
    echo "Input Potongan Tidak Sesuai <br>";
  }

  function hitungPenghasilan($inputGaji, $inputTunjangan, $inputPotongan) {
    $gajiBruto = $inputGaji + $inputTunjangan;
    $pajakPenghasilan = 0.1 * $gajiBruto;
    $asuransiKesehatan = 0.05 * $gajiBruto;
    $gajiBersih = $gajiBruto - ($pajakPenghasilan + $asuransiKesehatan);

    echo "Gaji Bruto Rp$gajiBruto";
    echo "<br>";
    echo "Pajak Penghasilan Rp$pajakPenghasilan";
    echo "<br>";
    echo "Asuransi Kesehatan Rp$asuransiKesehatan";
    echo "<br>";
    echo "Gaji Bersih Rp$gajiBersih";

  }
  hitungPenghasilan($inputGaji, $inputTunjangan, $inputPotongan);
  ?>
</body>

</html>