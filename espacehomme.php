<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['questiona']))
{
$_SESSION['Psychologie']=$_POST['questiona'] ;
}

if(isset($_POST['questionb']))
{
    $_SESSION['CDI']=$_POST['questionb'] ;

}
if(isset($_POST['questionc']))
{
    $_SESSION['commerce']=$_POST['questionc'] ;

}
if(isset($_POST['questiond']))
{
$_SESSION['type-sang']=$_POST['questiond'] ;

}

if(isset($_POST['questionf']))
{
$_SESSION['adoption']=$_POST['questionf'] ;

}

if(isset($_POST['revenue']))
{
$_SESSION['revenue']=$_POST['revenue'] ;

}

if(isset($_POST['questioncr']))
{
$_SESSION['credit']=$_POST['questioncr'] ;

}


header("location:espacefemme.php");
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
        <h2 align="center">ESPACE HOMME</h2><br><br>
</div>
    <div class="Form-section">


        <span class="Form-title"><label><h3>Psychologie</h3></label></span>
        <label class="Form-label--tick">
            <input type="radio"  value="violent" name="questiona" class="Form-label-radio" checked>
            <span class="Form-label-text">Violent</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="laxiste" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Laxiste</span>
        </label>

    <label class="Form-label--tick">
            <input type="radio"  value="critique" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Critique</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="culpabilisateur" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Culpabilisateur</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="paranoiaque" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Paranoiaque</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="envahisseur" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Envahisseur</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="patient" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Patient</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="encourageant" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Encourageant</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="empathique" name="questiona" class="Form-label-radio">
            <span class="Form-label-text">Empathique</span>
        </label>

        <div class="Form-section" style="margin-top: 15px">

        <span class="Form-title"><label><h3>Situation Financiere</h3></label></span>
 
  <label  class="Form-label-text">Revenue : </label>
         <label class="Form-label--tick">
            <input type="number"  style="margin-left:3px" value="" name="revenue" class="form-control" />
        </label>
         <br><br>
         <label class="Form-label-text">CDI : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questionb" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questionb" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label><br><br>

        <label class="Form-label-text">Commerce : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questionc" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questionc" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label>
        <br>

        <label class="Form-label-text" style="margin-top:10px">Credit : </label>
         <label class="Form-label--tick">
            <input type="radio"  value="1" name="questioncr" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questioncr" class="Form-label-radio" checked>
            <span class="Form-label-text">NON</span>
        </label>
        </div>

        <div>
            <span class="Form-title"><label><h3>Fertilitè</h3></label></span>

             <label class="Form-label-text">Type de sang :</label>
        <label class="Form-label--tick">
            <input type="radio"  value="rhesusplus" name="questiond" class="Form-label-radio" checked>
            <span class="Form-label-text">Rhesus plus</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="rhesusmoins" name="questiond" class="Form-label-radio">
            <span class="Form-label-text">Rhesus moins</span>
        </label> <br><br>

      <label class="Form-label-text">Adoption :</label>
        <label class="Form-label--tick">
            <input type="radio"  value="1" name="questionf" class="Form-label-radio" checked>
            <span class="Form-label-text">OUI</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="questionf" class="Form-label-radio">
            <span class="Form-label-text">NON</span>
        </label>

        </div>
        
    </div>

   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>

</div>
</body>

</html>