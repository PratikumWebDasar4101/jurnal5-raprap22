<?php  

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];

if (strlen($_POST['nim'])>10) {
	?>			
	<script>
	    alert("Karakter NIM terlalu panjang");
	    location = "registrasi.html";
	</script>
	<?php 
	}
else echo "Nim: $nim<br>"; {
}
if (strlen($_POST['nama'])>25) {
	?>			
	<script>
	    alert("Karakter NAMA terlalu panjang");
	    location = "registrasi.html";
	</script>
	<?php 
	}
	else echo "Nama: $nama<br>"; {
}

echo "Email: $email";
?>

