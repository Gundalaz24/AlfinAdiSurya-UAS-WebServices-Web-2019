<?php 
$data = file_get_contents('http://papaside.com/data.php');
$hasil = json_decode($data, true);
?>
<html>
<head>

</head>
<body>
<?php foreach($hasil as $cetak) : ?>   
<h3><?= $cetak["Kota"]; ?></h3>
<h3><?= $cetak["siang"]; ?></h3>
<h3><?= $cetak["malam"]; ?></h3>
<h3><?= $cetak["suhu"]; ?></h3>
<h3><?= $cetak["Kelembapan"]; ?></h3><br>
<?php endforeach; ?>
</body>
</html>

