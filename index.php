<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>iHeart </title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> iHeart</a>

    <nav class="navbar">
        <a href="formular.html"> Formular Medical </a>
        <a href="PlanTratament.php"> Plan Tratament</a>
        <a href="#book"> Programare</a>
        <a href="Contact.php"> Contact</a>
        <a href="logout.php"> Delogare</a>
    </nav>

    <div id="'menu-btn" class="fas fa-bars"></div>
</header>

<section class="home" id="home">

    <div class="image">
        <img src="image/cardiologist-animate.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>iHeart este aplicatia ce va pune la dispozitie o serie de servicii medicale dedicate pacientilor cardiaci. De la monitorizare, programare, pana la o comunicare cat mai eficienta cu medicul de familie.</p>
        <a href="#" class="btn"> Incepe acum! <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- icons section starts  -->


<section class="icons-container">

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>24/24</h3>
        <p>Asistenta</p>
    </div>

    <div class="icons">
        <i class="fas fa-plus-square"></i>
        <h3>Servicii</h3>
        <p>De Calitate</p>
    </div>

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>Poti alege</h3>
        <p>Medicul la care doresti programare</p>
    </div>

    <div class="icons">
        <i class="fas fa-stethoscope"></i>
        <h3>Programare consult</h3>
        <p>La un pas distanta</p>
    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
            
        </div>

        <div class="content">
            <h3>we take care of your healthy heart</h3>
            <p>Aplicatia iHeart este adresata tuturor pacientilor de boli cardiace, pentru a face interactiunea cu medicul una cat mai usoara.</p>
            <p>Cu ajutorul aplicatiei, pacientul va putea vedea in timp real orice modificare adusa de catre medic asupra tratamentului acestuia, mici remindere pentru ca cu totii stim cat de important este timpul si ora la care se ia un medicament, si totodata posibilitatea de a realiza o programare cu medicul de familie.</p>
            <a href="Contact.html" class="btn"> Q&A <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>


<section class="services" id="services">

    <h1 class="heading"> our <span>Serviciile noastre</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Programare</h3>
            <p>Programare la medicul ales de dvs</p>
            <a href="#book" class="btn"> Apasa aici <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Consult</h3>
            <p>Inregistreaza simptomele si vei primi de la medic un diagnostic cu tratament.</p>
            <a href="#book" class="btn"> Apasa aici <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Fisa medicala</h3>
            <p>Finalizeaza completarea profilului dvs</p>
            <a href="formular" class="btn"> Apasa aici <span class="fas fa-chevron-right"></span> </a>
        </div>


    </div>
</section>
<section class="doctors" id="doctors">

    <h1 class="heading"> <span>Pasul 1: Alegeti doctorul</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Johnson Stew</h3>
            <span>Bucuresti</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Pop Mihaela</h3>
            <span>Tg Mures</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Mircea Ioan</h3>
            <span>Cluj-Napoca</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Rus Andrei</h3>
            <span>Constanta</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Moldovan Anca</h3>
            <span>Cluj-Napoca</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Carsta Andreea</h3>
            <span>Bucuresti</span>
            <a href="#book" class="btn"> Alege doctor <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

</section>

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="POST" action='Programare.php'>
            <h3>book appointment</h3>
            <input type="date" name="date" class="box" placeholder='Data programarii' required />
            <input type="time" name="time" class="box" placeholder='Ora programarii' required />
            <select name="doctor" required>
                <option value="" > Selecteaza doctor </option >
                <option value="Johnson Stew"> Johson Stew </option>
                <option value="Pop Mihaela"> Pop Mihaela </option>
                <option value="Mircea Ioan"> Mircea Ioan </option>
                <option value="Rus Andrei"> Rus Andrei </option>
                <option value="Moldovan Anca"> Moldovan Anca </option>
                <option value="Carsta Andreea"> Carsta Andreea </option>
            </select>
            <button type="submit" name="submittest" >send </button>
        </form>

    </div>

</section>























<script src="'js/script.js"></script>
</body>
</html>
