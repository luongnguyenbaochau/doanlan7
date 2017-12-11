<?php
$nhacungcap = new nhacungcap();
$mancc =$_GET["mancc"];
$nhacungcap->delete($mancc);
?>
<script type="text/javascript" >
    alert("Da xoa");
    window.location='index.php?act=nhacc';
</script>            
        
   