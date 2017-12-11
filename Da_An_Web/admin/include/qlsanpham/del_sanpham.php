<?php
$sanpham = new sanpham();
$masanpham =$_GET["masanpham"];
$sanpham->delete($masanpham);
?>
<script type="text/javascript" >
    alert("Da xoa");
    window.location='index.php?act=sanpham';
</script>            
        
   