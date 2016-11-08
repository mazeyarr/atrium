<?php

require 'php/bootstrap.php';
$a = new MainClass();

$a->header();

$db = new Database();

$sql = "SELECT * FROM supplies";
$db->query($sql);

while ( $res = $db->fetch() )
{
	print($res['name']);
}
?>

<?php $a->footer(); ?>