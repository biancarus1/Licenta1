<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Vizualizare Inregistrari</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/ptratament.css" type="text/css">
</head>
<body>
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> iHeart</a>
    <nav class="navbar">
        <ul>
        <li><a href="alogout.php"> Delogare</a> </li>
        </ul>
    </nav>
</header>
<div class="inregistrari" id="inregistrari">
<p><b>Toti pacientii :</b</p>
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

$sql = "SELECT u.email, u.password, p.nume, p.prenume, p.Data_nasterii, p.Varsta, p.Sex, p.Telefon FROM user u, pacient p where u.id=p.idp";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Email</th><th>Password</th><th>Nume</th><th>Prenume</th><th>Data Nasterii</th><th>Varsta</th><th>Sex</th><th>Telefon</th><th>Modificare</th><th>Stergere</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>  <td> ". $row["email"]. " </td> 
        <td> " . $row["password"] . " </td> 
        <td> ". $row["nume"]. " </td> 
        <td> ". $row["prenume"]. " </td> 
        <td> ". $row["Data_nasterii"]. " </td> 
        <td> ". $row["Varsta"]. " </td> 
        <td> ". $row["Sex"]. " </td> 
        <td> ". $row["Telefon"]. " </td> 
        <td><a href='amodificare.php?id=" .$row->userId . "'>Modificare  </a></td>
        <td><a href='astergere.php?id=" . $row->id. "'> Stegere pacient </a></td>
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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, password FROM user";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Email</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>  <td> ". $row["email"]. " </td> 
        <td> " . $row["password"] . " </td> 


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
<a href="ainserare.php">Adaugarea unui cont nou:</a>
<div class="inregistrari" id="inregistrari">
<p><b>Conturi create:</b</p>
</div>
</body>
</html>