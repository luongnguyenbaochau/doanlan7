<?php
$list = $book->getall();
foreach($list as $r)
{
	?>
    <div class=book>
    	<?php echo $r["book_name"];?><br />
        <a href="index.php?mod=cart&ac=add&id=<?php echo $r["book_id"];?>">Mua hàng</a>
    </div>
    <?php	
}
?>