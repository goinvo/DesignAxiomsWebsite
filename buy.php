<?php 
	$pagetitle="Buy a Deck";
	include("./includes/head.php"); 
?>

		<div id="previewContent" class="twelve columns">
			<div class="one-third column">
				<img src="./assets/images/cardsPreview2.png" alt="Preview our deck" id="preview" height="323px" width="454px" />
			</div>
			<div class="one-third column" id="priceInfo">
				<h1>Buy a Deck</h1>
				<hr>
				<p><span id="priceLabel">Price:</span><span id="price"> $1.00 + your soul</span></p>
				<a href="http://www.amazon.com" target="blank"><input type="submit" name="submit" id="buyButton" value="BUY" /></a>
			</div>
		</div><!--#content-->

		<div class="sixteen columns">
			<?php include("./includes/footer.php"); ?>
		</div>
	</div><!--end .container-->
	
		<?php include("./includes/js.php"); ?>
</body>
</html>
