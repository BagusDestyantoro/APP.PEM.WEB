<html>
 
<head>
	<title>Statement IF</title>
</head>
 
<body>
 
	<form method="POST" action="grade.php">
		Berapa Nilai PHPmu?: <input type="text" name="nilai">
		<input type="submit" name="submit" value="Cek">
	</form>

<?php
 
$nilai = "";
$grade = "";
 
if( isset($_POST['submit']) ){
	
	$nilai = $_POST['nilai'];
	
	if( ($nilai >= 90) )
		{$grade = "A";}
	else if( $nilai >= 80 )
		{$grade = "B";}
	else if( $nilai >= 70 )
		{$grade = "C";}
	else if( $nilai >= 60 )
		{$grade = "D";}
	else{
		$grade = "Nilai yang anda masukkan salah, silakan coba lagi";
	}
	
	echo "Nilai: $nilai Anda Mendapatkan Grade: $grade";
}
?>
	
</body>
 
</html>
