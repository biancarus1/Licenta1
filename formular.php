<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="heartbeat";

$conn= mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['Nume'])  && !empty($_POST['Prenume']) && !empty($_POST['Sex']) && !empty($_POST['Telefon']) ) {

		$Nume=$_POST['Nume'];
		$Prenume=$_POST['Prenume'];
		$newdate=date_Create($_POST["date"]);
		$date=date_format($newdate,"Y-m-d");
		$date=$_POST['Data_nasterii'];
		$Varsta=$_POST['Varsta'];
		$Sex=$_POST['Sex'];
		$Telefon=$_POST['Telefon'];
		$idp=$_SESSION["id"];

		$query="insert into pacient (Nume, Prenume, Data_nasterii, Varsta, Sex, Telefon, idp) values ('$Nume', '$Prenume', '$date', '$Varsta', '$Sex', '$Telefon' , '$idp')";

		$run= mysqli_query($conn, $query) or die (mysqli_error($conn));

		if($run) {
			echo ("<script LANGUAGE='JavaScript'>
            window. alert('Datele au fost introduse cu succes');
			window. location. href='formular.html';
			</script>");
		}
		else {
			echo ("<script LANGUAGE='JavaScript'>
            window. alert('Formularul nu a putut fi trimis');
			window. location. href='formular.html';
			</script>");
		}
	}
	else {
		echo ("<script LANGUAGE='JavaScript'>
            window. alert('Toate campurile sunt obligatorii');
			window. location. href='formular.html';
			</script>");
	}
}
?>