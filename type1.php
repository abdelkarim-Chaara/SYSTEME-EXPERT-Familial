<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question1']))
{
$_SESSION['Q1']=$_POST['question1'] ;
}

if(isset($_POST['question2']))
{
    $_SESSION['Q2']=$_POST['question2'] ;

}
if(isset($_POST['question3']))
{
    $_SESSION['Q3']=$_POST['question3'] ;

}
if(isset($_POST['question4']))
{
$_SESSION['Q4']=$_POST['question4'] ;

}

if(isset($_POST['question5']))
{
$_SESSION['Q5']=$_POST['question5'] ;

}
if(isset($_POST['question6']))
{
    $_SESSION['Q6']=$_POST['question6'] ;


}

header("location:type2.php");
}
?>


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
    
        <h1 align="center" style="margin-bottom: 15%">Type personnalité</h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Romantisme</label></span>
        <label class="Form-label--tick">
            <input type="radio"  value="1" name="question1" class="Form-label-radio" checked>
            <span class="Form-label-text">Romantique et Imaginatif</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio"  value="2" name="question1" class="Form-label-radio">
            <span class="Form-label-text">Pragmatique et Terre a terre</span>
        </label>
        
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Confrontation</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question2" class="Form-label-radio" checked >
            <span class="Form-label-text">Tendence a la confrontation</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question2" class="Form-label-radio">
            <span class="Form-label-text">Evite la confrontation</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Diplomatie</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question3" class="Form-label-radio" checked >
            <span class="Form-label-text">Diplomatique,Claimant et Ambitieux</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question3" class="Form-label-radio">
            <span class="Form-label-text">Direct,Solonel et idealiste</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Concentration</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question4" class="Form-label-radio" checked >
            <span class="Form-label-text">Concentrè et integre</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question4" class="Form-label-radio">
            <span class="Form-label-text">Spontanè et aime s'amuser</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Sociabilitè</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question5" class="Form-label-radio" checked >
            <span class="Form-label-text">Cherche de nouveaux amis, sociable</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question5" class="Form-label-radio">
            <span class="Form-label-text">cherche la solitude,introverti</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Colère</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question6" class="Form-label-radio" checked >
            <span class="Form-label-text">Facilement irritable</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question6" class="Form-label-radio">
            <span class="Form-label-text">Garde le sang froid</span>
        </label>
    </div>

   <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>

</html>