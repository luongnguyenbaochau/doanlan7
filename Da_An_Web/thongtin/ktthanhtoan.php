<?php
if(isset($_SESSION['tenuser']))	
{
	?>

	<script type="text/javascript" >
    window.location='index.php?menu=thanhtoan';
	</script>
<?php
}
else
{
	?>
	<script type="text/javascript" >
    window.location='index.php?menu=thongbaott';
	</script>
<?php
}	
?>