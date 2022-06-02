<?php
session_start();
$server="localhost";
$email="root";
$password="";
$dbname="heartbeat";

$conn= mysqli_connect($server, $email, $password, $dbname);

if(isset($_POST['submit123'])){

	$idPacient=$_SESSION['id'];
	$simptome=$_POST['simptome'];
	$newdate=date_Create($_POST["dataInceput"]);
	$date=date_format($newdate,"Y-m-d");
	$date=$_POST['dataInceput'];
	$comentarii=$_POST['comentarii'];

        $queryy="insert into inserare (idPacient, simptome, dataInceput, comentarii) values ('$idPacient','$simptome', '$date', '$comentarii')";

		$run= mysqli_query($conn, $queryy) or die (mysqli_error($conn));

		if($run) {
			echo ("<script LANGUAGE='JavaScript'>
            window. alert('Succesfully Updated');
			window. location. href='PlanTratament.php';
			</script>");
		}
		else {
			print "Form not submitted";
		}
    }

?>