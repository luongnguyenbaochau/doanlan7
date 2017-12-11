<?php
$hangsanxuat = new hangsanxuat();
$mahang =$_GET["mahang"];
$hangsanxuat->delete($mahang);
?>
<script type="text/javascript" >
    alert("Da xoa");
    window.location='index.php?act=hangsanxuat';
</script>   