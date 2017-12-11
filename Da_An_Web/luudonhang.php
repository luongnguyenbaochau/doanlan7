<?php
include "config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();

spl_autoload_register("loadClass");

$c= new Cart();
$c->saveDonHang();


?>
<script>
alert("Da dat hang!");
window.location='index.php';
</script>
