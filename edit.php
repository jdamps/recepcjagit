<html>
<head>
<title> Edycja - PRACOWNIK </title>
</head>
<body>
<?php

$con=mysqli_connect("localhost","jdamps","admin123","recepcja1");

$sql = "SELECT * FROM pracownicy WHERE id_pracownik='$_GET[id]'";

$records = mysqli_query($con,$sql);

?>

<table width='600' border='1' cellpadding='1' cellspacing='1'>

	<tr>
	<th>Login</th>
	<th>Imię</th>
	<th>Nazwisko</th>
	<th>Telefon</th>
	<th>Opis</th>
	</tr>
	
	<?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form method=POST action=update.php>";
		echo "<td><input type=text name=login_pracownik value='".$row['login_pracownik']."'></td>";
		echo "<td><input type=text name=imie_pracownik value='".$row['imie_pracownik']."'></td>";
		echo "<td><input type=text name=nazwisko_pracownik value='".$row['nazwisko_pracownik']."'></td>";
		echo "<td><input type=text name=tel_pracownik value='".$row['tel_pracownik']."'></td>";
		echo "<td><input type=text name=opis_pracownik value='".$row['opis_pracownik']."'></td>";
		echo "<td><input type=hidden name=id value=".$row['id_pracownik']."'></td>";
		echo "<td><button type=submit name=submit >Zmień</button></th>";
		echo "</form></tr>";
		
	}
	
	
	
	?>