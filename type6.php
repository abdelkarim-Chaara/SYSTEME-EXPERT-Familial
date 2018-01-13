
<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question28']))
{
$_SESSION['Q28']=$_POST['question28'] ;
}

if(isset($_POST['question29']))
{
    $_SESSION['Q29']=$_POST['question29'] ;

}
if(isset($_POST['question30']))
{
    $_SESSION['Q30']=$_POST['question30'] ;

}
if(isset($_POST['question31']))
{
$_SESSION['Q31']=$_POST['question31'] ;

}




header("location:type7.php");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Type personnalité</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,700italic|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/check-radio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">
<div style="margin-top: 10%">

<form class="Form" action="" method="post">
    <p>
        <h1 align="center" style="margin-bottom: 15%"> Type personnalité</h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Au cas de soucis </label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question28" class="Form-label-radio" checked >
            <span class="Form-label-text">Je les ignore, et je les met a part</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question28" class="Form-label-radio">
            <span class="Form-label-text">Je fais quelque chose d'agreable qui me plais</span>
        </label>
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Autonomie</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question29" class="Form-label-radio" checked >
            <span class="Form-label-text">Je depend de mes amis et eux aussi</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question29" class="Form-label-radio">
            <span class="Form-label-text">je suis autonome et je fais les chose moi meme</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Lunatisme</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question30" class="Form-label-radio" checked >
            <span class="Form-label-text">Dètachè,Preoccupè</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question30" class="Form-label-radio">
            <span class="Form-label-text">Lunatique et absorbè par sois</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Vis a vis des autres</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question31" class="Form-label-radio" checked >
            <span class="Form-label-text">J'aime les defier et les secouer</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question31" class="Form-label-radio">
            <span class="Form-label-text">j'aime les reconforter et les calmer</span>
        </label>
    </div>

  <button type="submit"  name="submit" class="btn btn-primary btn-lg">Next</button> 
  
</form>
</div>
</body>
</html>