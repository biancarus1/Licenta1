<?php
 
include_once('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $adminname = test_input($_POST["adminame"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['adminname'] == $adminname) &&
            ($user['password'] == $password)) {
                header("Location: aindex.php");
        }
        else {
            echo ("<script LANGUAGE='JavaScript'>
            window. alert('Username sau parola incorecta');
			window. location. href='alogin.php';
			</script>");
        }
    }
}
 
?>