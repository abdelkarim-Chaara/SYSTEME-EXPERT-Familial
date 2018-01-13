
<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question18']))
{
$_SESSION['Q18']=$_POST['question18'] ;
}

if(isset($_POST['question19']))
{
    $_SESSION['Q19']=$_POST['question19'] ;

}
if(isset($_POST['question20']))
{
    $_SESSION['Q20']=$_POST['question20'] ;

}
if(isset($_POST['question21']))
{
$_SESSION['Q21']=$_POST['question21'] ;

}

if(isset($_POST['question22']))
{
$_SESSION['Q22']=$_POST['question22'] ;

}


header("location:type5.php");
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
        <h1 align="center" style="margin-bottom: 15%">Type personnalité</h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Dependance</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question18" class="Form-label-radio" checked >
            <span class="Form-label-text">Rèticent de voir les autre dependre de moi </span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question18" class="Form-label-radio">
            <span class="Form-label-text">Empressè de voir les autre dependre de moi</span>
        </label>
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Emotion</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question19" class="Form-label-radio" checked >
            <span class="Form-label-text">Separe les emotions de mon travail</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question19" class="Form-label-radio">
            <span class="Form-label-text">Besoin de gèrer mes sentiment avant de pouvoir agir</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Aventure</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question20" class="Form-label-radio" checked >
            <span class="Form-label-text">Methodique et prudent</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question20" class="Form-label-radio">
            <span class="Form-label-text">Aventureux et prend les risques</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Soutien</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question21" class="Form-label-radio" checked >
            <span class="Form-label-text">Offre le soutien aux autres</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question21" class="Form-label-radio">
            <span class="Form-label-text">serieux et reservè</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Force</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1"  name="question22" class="Form-label-radio" checked >
            <span class="Form-label-text">Sent le besoin d'etre un pilier de force pour les autres</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2"  name="question22" class="Form-label-radio">
            <span class="Form-label-text">Sent le besoin de performer parfaitement</span>
        </label>
    </div>



  <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>