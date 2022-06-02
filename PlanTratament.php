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
        <li><a href="index.php"> Inapoi la pagina principala </a> </li>
        <li><a href="logout.php"> Delogare</a> </li>
        </ul>
    </nav>
<h1>Inregistrari simptome </h1>
</header>
<div class="form-style-5">
    <form method="POST" action="pinsert.php">
    <fieldset>
    <legend><span class="number">1</span> Completare date simptome</legend>
    <input type="text" name="simptome" placeholder="Simptome" required >
    <input type="date" name="dataInceput" placeholder="Data la care au inceput sa apara simptomele " required>
    <input type="text" name="comentarii"placeholder="Comentarii" required>
    <button type="submit" name="submit123" >send </button> 
    </form>
    </div>
<div class="inregistrari" id="inregistrari">
<p><b>Toate inregistrarile dvs:</b</p>
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

$sql = "SELECT * FROM inserare WHERE idPacient=" . $_SESSION["id"] . " ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='center' border='1' cellpadding='10'>";
    echo "<tr><th>Simptome</th><th>Data la care au inceput sa apara simptomele</th><th>Comentarii</th><th>Diagnostic</th><th>Medicamente</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>  <td> ". $row["simptome"]. " </td> 
        <td> " . $row["dataInceput"] . " </td> 
        <td>  " . $row["comentarii"] . " </td> </tr>";
    

    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>