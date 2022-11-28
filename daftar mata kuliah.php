<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Matkul</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div method="POST">
<div class="container" >
<?php $koneksi=new mysqli('localhost','root','','kriptografi');
$sql3="select * from matakuliah";
$q3=$koneksi->query($sql3);
$r3=$q3->fetch_array();
if (empty($r3)) {
	echo "Rekord belum ada ";
	exit();
}
?>
  <center><h2>Tabel Mata Kuliah</h2></center><br>
  <p><b>Tabel Daftar Mata Kuliah Enkripsi Algoritma AES 256 Bit Mod OCB dan Encoding Base64</p>  </b>          
  <table class="table table-bordered">
    <thead>
      <tr style="background-color: lightblue;">
        <th>Kode Mata Kuliah</th>
        <th>Jadwal Kuliah</th>
        <th>Mata Kuliah</th>
        <th>Jumlah SKS</th>
        <th>Dosen Pengampuh</th>
         <th>Ruangan</th>
        <th>Kelas / Semester</th>
 


      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><b><?php echo filter_var(htmlentities( $r3['kodesks'],FILTER_SANITIZE_STRING));?></b></td>
        <td><?php echo filter_var(htmlentities($r3['hari'],FILTER_SANITIZE_STRING));?></td>
        <td><?php echo filter_var(htmlentities($r3['matakuliah'],FILTER_SANITIZE_STRING));?></td>
        <td><?php echo filter_var(htmlentities($r3['sks'],FILTER_SANITIZE_STRING));?></td>
        <td><?php echo filter_var(htmlentities($r3['dosen'],FILTER_SANITIZE_STRING));?></td>
        <td><b><?php echo filter_var(htmlentities($r3['ruang'],FILTER_SANITIZE_STRING));?></b></td>
        <td><?php echo filter_var(htmlentities($r3['kelas'],FILTER_SANITIZE_STRING));?></td>
       
	</tr><?php } while($r3=$q3->fetch_array());?>
    </tbody>
  </table>
</div>


</body>
</html>