<?php

// cara koneksi ke postgre menggunakan pg_connect

$conn = pg_connect(“host=ec2-54-243-249-159.compute-1.amazonaws.com port=5432 dbname=d6rnodjgl5931b user=thkbrsqpcauwig password=’GTb2NAHaxmgbiyAP25kxYrO-p1'”);

// Untuk persiapan query
$result = pg_prepare($conn, “my_query”, ‘SELECT * FROM employee WHERE name = $1’);

// Untuk menjalankan query

// array(“mahrizal”) adalah sebagai pengisi $1 di atas

$result = pg_execute($conn, “my_query”, array(“mahrizal”));

// Menjalankan looping untuk menampilkan data

while ($row = pg_fetch_assoc($result))
{

?>
<div><?php echo $row[‘id’] ?> – <?php echo $row[‘name’] ?></div>

<?php

}
?>
