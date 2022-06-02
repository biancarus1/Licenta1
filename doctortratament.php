<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Vizualizare Inregistrari</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/ptratament.css" type="text/css">
</head>
<div class="inregistrari" id="inregistrari">
<p><b>Toate programarile :</b</p>
</div>
<?php
session_start();
$servername = "localhost";
$email = "root";
$password = "";
$dbname = "heartbeat";

// Create connection
$conn = new mysqli($servername, $email, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM inserare ORDER BY idPacient ";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>id Pacient</th><th>Simptome</th><th>dataInceput</th><th>comentarii </th><th>Diagnostic</th><th>Medicamente</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> 
        <td> ". $row["idPacient"]. " </td> 
        <td> ". $row["simptome"]. " </td> 
        <td> ". $row["dataInceput"]. " </td> 
        <td> ". $row["comentarii"]. " </td> 
        <td><a href='dinserare.php?id=" . $row["diagnostic"]. "'>Adauga diagnostic </a></td>
        <td><a href='dinserare.php?id=" . $row["medicamente"]. "'>Adauga tratament</a></td>
        </tr>";

    }
} else {
    echo "0 results";
}
}
else{
    echo "Error in ".$sql."
    ".$conn->error; 
}
$conn->close();
?>
</body>
</html>