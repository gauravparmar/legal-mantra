<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Legal Mantra</title>
	
	<?php
		include('cssLinks.php');
	?>
    
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	 
    	<?php 
		
			include('header.php');
		
		?>
	<div id="wrap">
	  <div class="container">
	  	  <div class="row">
		  	 <div class="col-md-2">
			 </div>
			 
			 <div class="col-md-8">
			 	<form role="form">
			    	<h3 align="center" style="font-family:"Courier New", Courier, monospace"> Contact Us </h3>
				 	<div class="form-group">
  					  <label for="exampleInputText">Contact Name</label>
  					  <input type="text" class="form-control" placeholder="Name">
 				 	</div>
 				 	<div class="form-group">
   					  <label for="exampleInputEmail1">Contact Email</label>
    				  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail Address">
 					 </div>
 				 	<div class="form-group">
  					  <label for="exampleInputText">Contact Number</label>
  					  <input type="text" class="form-control" placeholder="Contact Number">
 				 	</div>
					<div class="form-group">
  					  <label for="exampleInputText">Subject</label>
  					  <input type="text" class="form-control" placeholder="Subject">
 				 	</div>
				 	<div class="form-group">
  					  <label for="exampleInputTextArea">Description</label>
  					  <textarea class="form-control" rows="3" placeholder="Type Your Message Here" ></textarea>
 				 	</div>
				 	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			 </div>
			 
			 <div class="col-md-2">
			 </div>
			 
		  </div><!--.row end -->
	  </div><!--.container end -->	
	</div><!--.wrap end -->
	
	
	<!-- FOOTER -->
      <?php
	  		
			include('jsLinks.php');
	  ?>
 
  </body>
</html>