<?php 
$kom = $_POST['kom'];

if (count(explode(" ", $kom)) < 5) {
	?>			
	<script>
	    alert("Komentar terlalu pendek");
	  	location = "komentar.html"
	</script>
	<?php 	
}else echo "Komentar: $kom";

 ?>
