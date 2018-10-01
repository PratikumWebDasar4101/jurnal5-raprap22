<?php 
$kom = $_POST['kom'];

if (strlen($_POST['kom']) < 5) {
	?>			
	<script>
	    alert("Komentar terlalu pendek");
	  	location = "komentar.html"
	</script>
	<?php 	
}else echo "Komentar: $kom";

 ?>