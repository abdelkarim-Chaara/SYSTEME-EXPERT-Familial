<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question7']))
{
$_SESSION['Q7']=$_POST['question7'] ;
}

if(isset($_POST['question8']))
{
    $_SESSION['Q8']=$_POST['question8'] ;

}
if(isset($_POST['question9']))
{
    $_SESSION['Q9']=$_POST['question9'] ;

}
if(isset($_POST['question10']))
{
$_SESSION['Q10']=$_POST['question10'] ;

}

if(isset($_POST['question11']))
{
$_SESSION['Q11']=$_POST['question11'] ;

}
if(isset($_POST['question12']))
{
    $_SESSION['Q12']=$_POST['question12'] ;


}

header("location:type3.php");
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Type Personnalité</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,700italic|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/check-radio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">
<div style="margin-top: 20%">
<form class="Form" action="" method="post">
    <p>
        <h1 align="center" style="margin-bottom: 15%"> Type personnalité  </h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Intelligence</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question7" class="Form-label-radio" checked>
            <span class="Form-label-text">Debrouillard</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question7" class="Form-label-radio">
            <span class="Form-label-text">Reservè</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Affection</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question8" class="Form-label-radio" checked >
            <span class="Form-label-text">Etale l'affection, Sentimental</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question8" class="Form-label-radio">
            <span class="Form-label-text">Garde les distance avec les gens</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Face Aux nouvelles Experience</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question9" class="Form-label-radio" checked >
            <span class="Form-label-text">Recherche l'utilitè</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question9" class="Form-label-radio">
            <span class="Form-label-text">Recherche l'amusement</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Egoisme</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question10" class="Form-label-radio" checked >
            <span class="Form-label-text">Egoiste, ya que toi qui compte</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question10" class="Form-label-radio">
            <span class="Form-label-text">Altruiste, les autre aussi compte</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Esprit</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question11" class="Form-label-radio" checked >
            <span class="Form-label-text">Humainistique</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question11" class="Form-label-radio">
            <span class="Form-label-text">Genereux</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Mental</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question12" class="Form-label-radio" checked >
            <span class="Form-label-text">les autres depend de ma perspicacitè</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question12" class="Form-label-radio">
            <span class="Form-label-text">les autre depend de mon esprit de decision</span>
        </label>
    </div>

   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>