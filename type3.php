<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question13']))
{
$_SESSION['Q13']=$_POST['question13'] ;
}

if(isset($_POST['question14']))
{
    $_SESSION['Q14']=$_POST['question14'] ;

}
if(isset($_POST['question15']))
{
    $_SESSION['Q15']=$_POST['question15'] ;

}
if(isset($_POST['question16']))
{
$_SESSION['Q16']=$_POST['question16'] ;

}

if(isset($_POST['question17']))
{
$_SESSION['Q17']=$_POST['question17'] ;

}


header("location:type4.php");
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
<body  background="bg.jpg">
<div style="margin-top: 20%">

<form class="Form" action="" method="post">
    <p>
        <h1 align="center" style="margin-bottom: 15%">Type personnalité</h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Confiance en sois</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question13" class="Form-label-radio" checked>
            <span class="Form-label-text">j'ai extremement confiance en moi</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question13" class="Form-label-radio">
            <span class="Form-label-text">je n'ai absolument pas confiance en moi</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Prioritè</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question14" class="Form-label-radio" checked >
            <span class="Form-label-text">Plus axè sur les relations que sur les objectifs</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question14" class="Form-label-radio">
            <span class="Form-label-text">plus axè sur les objectifs que sur les relations</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Franc-parler</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question15" class="Form-label-radio" checked >
            <span class="Form-label-text">incapable de parler franchement</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question15" class="Form-label-radio">
            <span class="Form-label-text">franc et je mache pas les mots</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Flexibilitè</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question16" class="Form-label-radio" checked >
            <span class="Form-label-text">Bornè</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question16" class="Form-label-radio">
            <span class="Form-label-text">Flexible et ouvert</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Audace</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question17" class="Form-label-radio" checked >
            <span class="Form-label-text">Tendence a hesiter</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question17" class="Form-label-radio">
            <span class="Form-label-text">Audacieux et dominateur</span>
        </label>
    </div>


    

   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>