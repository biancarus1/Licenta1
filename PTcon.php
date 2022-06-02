 fields required ";
	// } 
}
?>
<html>
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>iHeart </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
        <link rel="stylesheet" type="text/css" href="css/dinsert_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />
        <link rel ="stylesheet" href="css/style.css">
        <link rel ="stylesheet" href="css/style1.css">
        
        <title> Completarea datelor pentru primirea diagnosticului de la medic: </title>

</head>
<body>
<div class="form-style-5">
        <form method="POST" action='PTcon.php'>
          <label for='idPacient'>Patient ID</label>
          <input type='text' name='idPacient' placeholder='Enter a valid Patient ID' required><br>
    
          <label for='dataProgramare'>Data programare</label>
          <input type='date' name='date' id='date' placeholder='Enter Date' required><br>
    
    
          <label for='oraProgramare'>Time</label>
          <input type='time' name='time' id='time' placeholder='Enter Time' required><br>
    
    
          <label for='numeP'>Complains</label>
          <textarea name='numeP' placeholder='Write complains' required ></textarea><br>
    
          <label for='prenumeP'>Findings</label>
          <textarea name='prenumeP' placeholder='Write findings' required></textarea><br>
    
          <label for='mobile'>Numar de telefon</label>
          <input type='number' name='mobile' id='date' placeholder='mobile' required><br>
    
          <input type='submit' name='input-submit' value='Save'>
        </form>
        </div> 
</body>
</html> -->
