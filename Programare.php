<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="heartbeat";

$conn= mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submittest'])){
    $newdate=date_Create($_POST["date"]);
    $date=date_format($newdate,"Y-m-d");
    $newtime=date_Create($_POST["time"]);
    $time=date_format($newtime,"H:i:s");
    $datetime=$date." ".$time;
	$doctor=$_POST['doctor'];
	$idPacient=$_SESSION["id"];

	$query="insert into programare (date_time,  doctor, idPacient) values ('$datetime', '$doctor', '$idPacient')";

	$run= mysqli_query($conn, $query) or die (mysqli_error($conn));

	if($run) {
		echo ("<script LANGUAGE='JavaScript'>
        window. alert('Succesfully Updated');
		window. location. href='index.php';
		</script>");
	}
	else {
		print "Form not submitted";
	}
}
?>