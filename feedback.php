<?php 
	$pagetitle = "Feedback";
	include("./includes/head.php"); 
?>
	
			<div id="content">
				<form class="column" method="POST" action="./includes/mailer.php">
				
				<?php
						if(isset($_GET["error"])) {
							if(strtolower($_GET["error"]) == "blank_field") {
								print "<div class=\"error\">Please fill out each field.</div>";
							}
						} if(isset($_GET["confirm"])) {
							if(strtolower($_GET["confirm"]) == "confirm") {
								print "<div class=\"confirm\">Thank you for your feedback! We will try to get back to you in 2 business hours.</div>";
							}
						}
						
						
					?>
					
					<h2>Comments? &nbsp;Questions? &nbsp;Just want to drop us a line?</h2>
					<ol>
						<li><input type="text" name="name" id="name_input" value="Name" class="required" /></li>
						<li><input type="email" name="email" id="email_input" value="Email" class="required email" /></li>
						<li>
                        	<textarea rows="8" cols="20" id="msg_input" name="message" class="required">Tell us how we can improve the Axiom cards.</textarea>
                       	</li>
						<li><input type="submit" id="sub_button" name="submit" value="SUBMIT" /></li>
					</ol>
				</form>
				<div id="getInTouch" class="column">
					<h2>Other ways to get in touch:</h2>
					<p>617-504-3390</p>
					<p>661 Massachusetts Avenue<br/>
						3rd floor, Arlington, MA</p>
					<p><a href="mailto:info@goinvo.com?Subject=Hello">info@goinvo.com</a></p>
				</div><!--#getInTouch-->
			</div><!--#content-->
			
		<div class="sixteen columns staticpage"> <!--staticpage refers to feedback and about, in order to move the footer down slightly-->
			<?php include("./includes/footer.php"); ?>
		</div>
	</div><!--end .container-->
	
		<?php include("./includes/js.php"); ?>
		
		<script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#contactform").validate();
				
				
				document.getElementById('email_input').onfocus = function(){
					if($(this).val() == 'Email'){
						$(this).val('');
					}
				}
				document.getElementById('email_input').onblur = function(){
					if( $(this).val() == ''){
						$(this).val('Email');
					}
				}
				
				document.getElementById('name_input').onfocus = function(){
					if($(this).val() == 'Name'){
						$(this).val('');
					}
				}
				document.getElementById('name_input').onblur = function(){
					if( $(this).val() == ''){
						$(this).val('Name');
					}
				}
				
				document.getElementById('msg_input').onfocus = function(){
					if( $(this).val() == 'Tell us how we can improve the Axiom cards.'){
						$(this).val('');
					}
				}
				document.getElementById('msg_input').onblur = function(){
					if( $(this).val() == ''){
						$(this).val('Tell us how we can improve the Axiom cards.');
					}
				}
				
				document.getElementById('sub_button').onmousedown = function(){
					if($('email_input').val() == 'Email'){
						$('email_input').val('');
					}
					if($('name_input').val() == 'Name'){
						$('name_input').val('');
					}
					if($('msg_input').val() == 'Tell us how we can improve the Axiom cards.'){
						$('msg_input').val('');
					}
				}
				
			});
		</script>

</body>
</html>