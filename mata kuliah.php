<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mata Kulian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <center> <h2>Form Daftar Mata Kuliah UMB</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="matakuliah">Mata Kuliah : </label>
      <input type="text" class="form-control" id="nama" placeholder=" Mata Kuliah" name="matakuliah" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="hari">Jadwal Mata Kuliah:</label>
      <input type="datetime-local" class="form-control" id="nama" placeholder="Hari" name="hari" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="kodesks">Kode Mata Kuliah:</label>
      <input type="text" class="form-control" id="nama" placeholder="Kode Mata Kuliah" name="kodesks" autocomplete="off" required>
    </div>
	<div class="form-group">
      <label for="sks">Jumlah SKS:</label>
      <select class="form-control selectpicker" name="sks" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
     <div class="form-group">
      <label for="dosen">Dosen Pengampuh</label>
      <input type="text" class="form-control" id="nama" placeholder=" Nama Dosen" name="dosen" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="ruang">Ruangan:</label>
      <input type="text" class="form-control" id="almt" title="Nama Ruang" name="ruang" required autocomplete="off"></input>
    </div>
    <div>
      <label for="kelas">Kelas / Semester</label>
     <select class="form-control selectpicker" name="kelas" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select><br>
    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bsimpan'])) {
	$hari=filter_var(htmlentities($_POST['hari'],FILTER_SANITIZE_STRING));
	$matakuliah=filter_var(htmlentities($_POST['matakuliah'], FILTER_SANITIZE_STRING));
  $kodesks=filter_var(htmlentities($_POST['kodesks'],FILTER_SANITIZE_STRING));
  $dosen=filter_var(htmlentities($_POST['dosen'],FILTER_SANITIZE_STRING));
	$sks=filter_var(htmlentities($_POST['sks'],FILTER_SANITIZE_STRING));
	$ruang=filter_var(htmlentities($_POST['ruang'],FILTER_SANITIZE_STRING));
  $kelas=filter_var(htmlentities($_POST['kelas'],FILTER_SANITIZE_STRING));
 
   
 $cipher = "aes-256-ocb";
  $kunci="base64_encode(aku mancing ya)";
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);
  $kodesks = openssl_encrypt($kodesks, $cipher, $kunci, $options=0, $iv, $tag);
  
  $ruang = openssl_encrypt($ruang, $cipher, $kunci, $options=0, $iv, $tag);


	$koneksi=new mysqli('localhost','root','','kriptografi');
	$sql1="insert into matakuliah (matakuliah,hari,sks,ruang, kodesks, dosen,kelas)
	values ('".$matakuliah."','".$hari."','".$sks."','".$ruang."','".$kodesks."','".$dosen."','".$kelas."')";
	$q=$koneksi->query($sql1);
	if ($q) {
		echo '<br><div class="alert alert-success">
  <strong>Success!</strong> Mata Kuliah Telah Di Rekord!
</div>';
	} else {
		echo '<div class="alert alert-danger">
    <strong>Danger!</strong> Mata Kuliah Gagal Di Rekord!
  </div>';
	}
  include('daftar mata kuliah.php');
}
?>