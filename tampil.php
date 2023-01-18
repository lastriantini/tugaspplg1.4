<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="tugas.php">
<?php
echo "<b>BIODATA SISWA</b>";
echo "<br><br>";

$nama = $_POST ['nama'];
echo "Nama anda adalah : $nama";
echo "<br> <br>";

$alamat = $_POST ['alamat'];
echo "Alamat anda adalah : $alamat";
echo "<br> <br>";

$ttl = $_POST ['ttl'];
echo "Tanggal lahir anda adalah : $ttl";
echo "<br> <br>";

$umur = $_POST ['umur'];
echo "Umur anda adalah : $umur";
echo "<br> <br>";

$sekolah = $_POST ['sekolah'];
echo "sekolah anda adalah : $sekolah";
echo "<br> <br>";

$rombel = $_POST ['rombel'];
echo "rombel anda adalah : $rombel";
echo "<br> <br> <br>";

echo "<b>HASIL NILAI</b>";
echo "<br> <br>";

$np = $_POST ['np'];
echo "Nilai Produktif anda adalah : $np";
echo "<br> <br>";

$nm = $_POST ['nm'];
echo "Nilai Matematika anda adalah : $nm";
echo "<br> <br>";

$ni = $_POST ['ni'];
echo "Nilai Indonesia anda adalah : $ni";
echo "<br> <br>";

$ns = $_POST ['ns'];
echo "Nilai Pipas anda adalah : $ns";
echo "<br> <br>";

$nd = $_POST ['nd'];
echo "Nilai Sunda anda adalah : $nd";
echo "<br> <br>";

$nj = $_POST ['nj'];
echo "Nilai PJOK anda adalah : $nj";
echo "<br> <br>";

$nf = $_POST ['nf'];
echo "Nilai Informatika anda adalah : $nf";
echo "<br> <br>";

$np = $_POST ['np'];
$nm = $_POST ['nm'];
$ns = $_POST ['ns'];
$ni = $_POST ['ni'];
$ni = $_POST ['nd'];
$ni = $_POST ['nj'];
$ni = $_POST ['nf'];

$sum = $np + $ni + $nm + $ns + $nd + $nj + $nf;
$mean = $sum/7;
echo "rata rata nilai anda adalah : $mean";
echo "<br> <br>";

echo "nilai max anda adalah : ";
echo max ($np, $nm, $ni, $ns, $nd, $nj, $nf);
echo "<br><br>";

echo "nilai min anda adalah :  ";
echo min ($np, $ni, $nm, $ns, $nd, $nj, $nf);
echo "<br><br>";
?>
    <input type="submit" value="kembali">
</body>
</html>

