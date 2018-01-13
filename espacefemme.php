<?php

session_start();
if (isset($_POST['submit'])) {

    if( (empty($_POST['nom'])) ||(empty($_POST['prenom']) ))
{

echo " <script>alert('Fill All Fields .')</script>";

} else {


if(isset($_POST['questionaf']))
{
$_SESSION['Psychologief']=$_POST['questionaf'] ;
}

if(isset($_POST['questionbf']))
{
    $_SESSION['CDIf']=$_POST['questionbf'] ;

}
if(isset($_POST['questioncf']))
{
    $_SESSION['commercef']=$_POST['questioncf'] ;

}
if(isset($_POST['questiondf']))
{
$_SESSION['type-sangf']=$_POST['questiondf'] ;

}

if(isset($_POST['questionff']))
{
$_SESSION['adoptionf']=$_POST['questionff'] ;

}

if(isset($_POST['revenuef']))
{
$_SESSION['revenuef']=$_POST['revenuef'] ;

}
if(isset($_POST['questioncrf']))
{
$_SESSION['creditf']=$_POST['questioncrf'] ;

}

if(isset($_POST['nom']))
{
$_SESSION['nomf']=$_POST['nom'] ;

}

if(isset($_POST['prenom']))
{
$_SESSION['prenomf']=$_POST['prenom'] ;

}



header("location:resultat-kids.php");

}


}
?>
<html>
<head>
    <meta charset="utf-8">

    <title>Aptitude d'avoir des enfance</title>

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
<div > 
<h1 align="center">Aptitude d'avoir des enfance</h1>
        <h2 align="center">ESPACE FEMME</h2><br><br>
</div>
    <div class="Form-section">

<label class="Form-label-text">Nom  : </label>
         <label class="Form-label--tick">
            <input type="text"  value="" name="nom" class="form-control" />
        </label>

<label class="Form-label-text" style="margin-top:10px">Prenom  : </label>
         <label class="Form-label--tick">
            <input type="text"  value="" name="prenom" class="form-control" />
        </label>
        <span class="Form-title"><label><h3>Psychologie</h3></label></span>
        <label class="Form-label--tick">
            <input type="radio"  value="violent" name="questionaf" class="Form-label-radio" checked>
            <span class="Form-label-text">Violent</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="laxiste" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Laxiste</span>
        </label>

    <label class="Form-label--tick">
            <input type="radio"  value="critique" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Critique</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="culpabilisateur" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Culpabilisateur</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="paranoiaque" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Paranoiaque</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="envahisseur" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Envahisseur</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="patient" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Patient</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="encourageant" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Encourageant</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="empathique" name="questionaf" class="Form-label-radio">
            <span class="Form-label-text">Empathique</span>
        </label>

        <div class="Form-section" style="margin-top: 15px">

        <span class="Form-title"><label><h3>Situation Financiere</h3></label></span>
 

         
         <label  class="Form-label-text">Revenue : </label>
         <label class="Form-label--tick">
            <input type="number"  style="margin-left:28px" value="" name="revenuef" class="form-control" />
        </label>

<br/><br/>
         <label class="Form-label-text">CDI : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questionbf" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questionbf" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label><br><br>

        <label class="Form-label-text">Commerce : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questioncf" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questioncf" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label>
        <br>
         <label class="Form-label-text" style="margin-top:10px">Credit : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questioncrf" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questioncrf" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label>
        </div>

        <div>
            <span class="Form-title"><label><h3>Fertilitè</h3></label></span>

             <label class="Form-label-text">Type de sang :</label>
        <label class="Form-label--tick">
            <input type="radio"  value="rhesusplus" name="questiondf" class="Form-label-radio" checked>
            <span class="Form-label-text">Rhesus plus</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="rhesusmoins" name="questiondf" class="Form-label-radio">
            <span class="Form-label-text">Rhesus moins</span>
        </label> <br><br>

      <label class="Form-label-text">Adoption :</label>
        <label class="Form-label--tick">
            <input type="radio"  value="1" name="questionff" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questionff" class="Form-label-radio">
            <span class="Form-label-text">NON</span>
        </label>

        </div>
        
    </div>

   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>

</div>
</body>

</html>