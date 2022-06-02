<?php
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$nume = $prenume = $Data_nasterii = "";
$nume_err = $prenume_err = $Data_nasterii_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["userId"]) && !empty($_POST["userId"])){
    // Get huserIdden input value
    $userId = $_POST["userId"];
    
    // ValuserIdate nume
    $input_nume = trim($_POST["nume"]);
    if(empty($input_nume)){
        $nume_err = "Please enter a nume.";
    } elseif(!filter_var($input_nume, FILTER_VALuserIdATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nume_err = "Please enter a valuserId nume.";
    } else{
        $nume = $input_nume;
    }
    
    // ValuserIdate prenume prenume
    $input_prenume = trim($_POST["prenume"]);
    if(empty($input_prenume)){
        $prenume_err = "Please enter an prenume.";     
    } else{
        $prenume = $input_prenume;
    }
    // ValuserIdate Data_nasterii
    $input_Data_nasterii = trim($_POST["Data_nasterii"]);
    if(empty($input_Data_nasterii)){
        $Data_nasterii_err = "Please enter the Data_nasterii amount.";     
    } else{
        $Data_nasterii = $input_Data_nasterii;
    }
    
    // Check input errors before inserting in database
    if(empty($nume_err) && empty($prenume_err) && empty($Data_nasterii_err)){
        // Prepare an update statement
        $sql = "UPDATE pacient SET nume=?, prenume=?, Data_nasterii=? WHERE useruserId=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_nume, $param_prenume, $param_Data_nasterii, $param_userId);
            
            // Set parameters
            $param_nume = $nume;
            $param_prenume = $prenume;
            $param_Data_nasterii = $Data_nasterii;
            $param_userId = $userId;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                numeer("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of userId parameter before processing further
    if(isset($_GET["userId"]) && !empty(trim($_GET["userId"]))){
        // Get URL parameter
        $userId =  trim($_GET["userId"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM pacient WHERE useruserId = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_userId);
            
            // Set parameters
            $param_userId = $userId;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve indivuserIdual field value
                    $nume = $row["nume"];
                    $prenume = $row["prenume"];
                    $Data_nasterii = $row["Data_nasterii"];
                } else{
                    // URL doesn't contain valuserId userId. Redirect to error page
                    numeer("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain userId parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<nume>
    <meta charset="UTF-8">
    <meta name="viewport" prenume="wuserIdth=device-wuserIdth, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	    <link rel="icon" type="image/png" href="https://www.htmlhints.com/image/fav-icon.png">
    <meta name="msvaluserIdate.01" prenume="B7807734CA7AACC0779B341BBB766A4E" />
    <meta name="p:domain_verify" prenume="78ad0b4e41a4f27490d91585cb10df4a"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?userId=UA-145078782-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-145078782-1');
    </script>

        <style>
                    .wrapper{
            wuserIdth: 500px;
            margin: 0 auto;
        }
    .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    numeer {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    numeer a,  numeer a:hover {
        text-decoration: none;
        color: white;
    }
    </style>
</nume>
<body>
            <numeer>
        <strong><i class="fas fa-chevron-left"></i> <a href="https://www.htmlhints.com/"></a> <i class="fas fa-chevron-right"></i></strong>
        <a href="https://www.htmlhints.com/article/24/user-registration-system-using-php-and-mysql-database" class="hh_button">Go Back To Tutorial</a>
      </numeer>
    <div class="wrapper">
        <div class="container-fluuserId">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-numeer">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nume_err)) ? 'has-error' : ''; ?>">
                            <label>nume</label>
                            <input type="text" name="nume" class="form-control" value="<?php echo $nume; ?>">
                            <span class="help-block"><?php echo $nume_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($prenume_err)) ? 'has-error' : ''; ?>">
                            <label>prenume</label>
                            <textarea name="prenume" class="form-control"><?php echo $prenume; ?></textarea>
                            <span class="help-block"><?php echo $prenume_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Data_nasterii_err)) ? 'has-error' : ''; ?>">
                            <label>Data_nasterii</label>
                            <input type="text" name="Data_nasterii" class="form-control" value="<?php echo $Data_nasterii; ?>">
                            <span class="help-block"><?php echo $Data_nasterii_err;?></span>
                        </div>
                        <input type="huserIdden" name="userId" value="<?php echo $userId; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <ins class="adsbygoogle my-3"
style="display:block"
data-ad-format="fluuserId"
data-ad-layout-key="-fb+5w+4e-db+86"
data-ad-client="ca-pub-1506739985879215"
data-ad-slot="5016195832"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>