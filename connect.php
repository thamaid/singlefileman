<?php
$conn = pg_connect(“
	host=ec2-54-243-249-159.compute-1.amazonaws.com
	port=5432 dbname=d6rnodjgl5931b user=thkbrsqpcauwig
	password=GTb2NAHaxmgbiyAP25kxYrO-p1
	”);

$result = pg_prepare($conn, “my_query”, ‘SELECT * FROM employee WHERE name = $1’);
$result = pg_execute($conn, “my_query”, array(“mahrizal”));
while ($row = pg_fetch_assoc($result))
{
?>
<div><?php echo $row[‘id’] ?> – <?php echo $row[‘name’] ?></div>

<?php

}
?>
