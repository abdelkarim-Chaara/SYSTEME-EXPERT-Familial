
<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question23']))
{
$_SESSION['Q23']=$_POST['question23'] ;
}

if(isset($_POST['question24']))
{
    $_SESSION['Q24']=$_POST['question24'] ;

}
if(isset($_POST['question25']))
{
    $_SESSION['Q25']=$_POST['question25'] ;

}
if(isset($_POST['question26']))
{
$_SESSION['Q26']=$_POST['question26'] ;

}

if(isset($_POST['question27']))
{
$_SESSION['Q27']=$_POST['question27'] ;

}


header("location:type6.php");
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
        <span class="Form-title"><label>Mon succès est du </label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question23" class="Form-label-radio" checked >
            <span class="Form-label-text">A mon talent de faire une impression  </span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question23" class="Form-label-radio">
            <span class="Form-label-text">A mes conpetances interpersonnelles</span>
        </label>
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Tranquilitè d'esprit</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question24" class="Form-label-radio" checked >
            <span class="Form-label-text">Interessè a poser des questions difficiles</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question24" class="Form-label-radio">
            <span class="Form-label-text">Interessè par le maintiens de la stabilitè</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Douceur</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question25" class="Form-label-radio" checked >
            <span class="Form-label-text">Intraitable,sceptique</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question25" class="Form-label-radio">
            <span class="Form-label-text">Doux et sentimental</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Inquitude</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question26" class="Form-label-radio" checked >
            <span class="Form-label-text">De rater quelque chose de mieux</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question26" class="Form-label-radio">
            <span class="Form-label-text">De savoir quelqu'un qui profite de moi si je m'expose</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>J'agace les autres car</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question27" class="Form-label-radio" checked >
            <span class="Form-label-text">J'ai une tendrence a ètre diftant et froid</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question27" class="Form-label-radio">
            <span class="Form-label-text">Je leur dis ce qu'il faut faire</span>
        </label>
    </div>




  <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>