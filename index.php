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





</table>
</body>
</html>