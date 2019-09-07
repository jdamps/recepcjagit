<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css"/>
<title>
Wirtualna Recepcja - PRACOWNICY - Dodawanie
</title>
</head>
<body>
<p>Dodawanie nowego pracownika</p>

<form method="POST" action="index.php" >
<input type="hidden" name="submitted" value="true" />
Login:<br />
<input type="text" name="login_pracownik" /><br/>
Imię:<br />
<input type="text" name="imie_pracownik" /><br/>
Nazwisko:<br />
<input type="text" name="nazwisko_pracownik" /><br/>
Telefon:<br />
<input type="text" name="tel_pracownik" /><br/>
Dodatkowe Informacje:<br />
<input type="text" name="opis_pracownik" /><br/>
<button type="submit" name="submit">Dodaj</button>
</form>


<?php
if(isset($_POST["submit"])){
$login_pracownik = $_POST['login_pracownik'];
$imie_pracownik = $_POST['imie_pracownik'];
$nazwisko_pracownik = $_POST['nazwisko_pracownik'];
$tel_pracownik = $_POST['tel_pracownik'];
$opis_pracownik = $_POST['opis_pracownik'];
$con=mysqli_connect("localhost","jdamps","admin123","recepcja1");
mysqli_query($con,"INSERT INTO pracownicy SET login_pracownik='$login_pracownik', imie_pracownik='$imie_pracownik', nazwisko_pracownik='$nazwisko_pracownik', tel_pracownik='$tel_pracownik', opis_pracownik='$opis_pracownik' ");
}
?>

<p>PRACOWNICY</p>

<?php
$con=mysqli_connect("localhost","jdamps","admin123","recepcja1");
if (mysqli_connect_errno())
{
echo "Błąd połączenia z
MySQL: " . mysqli_connect_error();
}


if ($records=mysqli_query($con,"SELECT * FROM pracownicy"))
	echo "<table width='600' border='1' cellpadding='1' cellspacing='1'>";
	echo "<th>ID</th>";
	echo "<th>Login</th>";
	echo "<th>Imię</th>";
	echo "<th>Nazwisko</th>";
	echo "<th>Telefon</th>";
	echo "<th>Opis</th>";
	echo "<th>Edytuj</th>";
	echo "<th>Usuń</th>";
	
	while($pk=mysqli_fetch_assoc($records)){
	
	echo "<tr>";
	
	echo "<td>".$pk['id_pracownik']."</td>";
	echo "<td>".$pk['login_pracownik']."</td>";
	echo "<td>".$pk['imie_pracownik']."</td>";
	echo "<td>".$pk['nazwisko_pracownik']."</td>";
	echo "<td>".$pk['tel_pracownik']."</td>";
	echo "<td>".$pk['opis_pracownik']."</td>";
	echo "<td><a href=edit.php?id=".$pk['id_pracownik'].">Edytuj</a></td>";
	echo "<td><a href=delete.php?id=".$pk['id_pracownik'].">Usuń</a></td>";

	echo "</tr>";
	
	
	
}



mysqli_close($con);

?>


</body>
</html>