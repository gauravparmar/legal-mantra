$(document).ready(function(){
	//$('#content').load('home.php');	
	$('ul#nav li a').click(function(){
		var page=$(this).attr('href');
		//alert(page);
		$('#content').load(page);
		return false;
	});
});