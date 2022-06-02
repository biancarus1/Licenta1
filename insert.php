<?php
$server="localhost";
$username="root";
$password="";
$dbname="heartbeat";

$conn= mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['input-submit'])){

	if(!empty($_POST['simptome'])  && !empty($_POST['dataInceput']) ) {

		$simptome=$_POST['simptome'];
		$dataInceput=$_POST['dataInceput'];
        $alergii=$_POST['alergii'];

		$query="insert into inserare (simptome, dataInceput, alergii) values ('$simptome', '$dataInceput', '$alergii')";

		$run= mysqli_query($conn, $query) or die (mysqli_error());

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
	else {
		print "All fields required ";
	}
}
?>