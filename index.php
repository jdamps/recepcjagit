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

<form method="post" action="index.php" >
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
<input type="submit" value="dodaj"/>
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

<p>Wyświetlenie tabeli studenci</p>

<?php
// łączenie z bazą
$con=mysqli_connect("localhost","jdamps","admin123","recepcja1");
// sprawdzenie połączenia
if (mysqli_connect_errno())
{
echo "Błąd połączenia z
MySQL: " . mysqli_connect_error();
}
// wyniki

if ($records=mysqli_query($con,"SELECT * FROM studenci"))
	echo "<table width='600' border='1' cellpadding='1' cellspacing='1'>";
	echo "<th>ID Studenta</th>";
	echo "<th>Imię</th>";
	echo "<th>Nazwisko</th>";
	echo "<th>Rok Studiów</th>";
	echo "<th>Adres</th>";
	
	while($student=mysqli_fetch_assoc($records)){
	
	echo "<tr>";
	
	echo "<td>".$student['id']."</td>";
	echo "<td>".$student['imie']."</td>";
	echo "<td>".$student['nazwisko']."</td>";
	echo "<td>".$student['rok_studiow']."</td>";
	echo "<td>".$student['adres']."</td>";
	
	echo "</tr>";
	
}//end while

echo "</table>";

mysqli_close($con);

?>



</table>
</body>
</html>