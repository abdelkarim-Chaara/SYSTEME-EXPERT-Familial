
<?php

session_start();
if (isset($_POST['submit'])) {
if(isset($_POST['question32']))
{
$_SESSION['Q32']=$_POST['question32'] ;
}

if(isset($_POST['question33']))
{
    $_SESSION['Q33']=$_POST['question33'] ;

}
if(isset($_POST['question34']))
{
    $_SESSION['Q34']=$_POST['question34'] ;

}
if(isset($_POST['question35']))
{
$_SESSION['Q35']=$_POST['question35'] ;

}

if(isset($_POST['question36']))
{
$_SESSION['Q36']=$_POST['question36'] ;

}


header("location:resultat.php");
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
        <h1 align="center" style="margin-bottom: 15%">Type personnalité</h1>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Extravertisme</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question32" class="Form-label-radio" checked >
            <span class="Form-label-text">Extravertie, Sociable</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question32" class="Form-label-radio">
            <span class="Form-label-text">Serieux , autodisciplinè</span>
        </label>
    </div>

    
    <div class="Form-section">
        <span class="Form-title"><label>Timiditè</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question33" class="Form-label-radio" checked >
            <span class="Form-label-text">Timide a propos de mes competances</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question33" class="Form-label-radio">
            <span class="Form-label-text">Partage mes competances avec les autres</span>
        </label>
        
    </div>

    

    <div class="Form-section">
        <span class="Form-title"><label>Securitè</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question34" class="Form-label-radio" checked >
            <span class="Form-label-text">I
            nteret personnel avant la securitè</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question34" class="Form-label-radio">
            <span class="Form-label-text">la securitè puis les interets personnel</span>
        </label>
        
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>En cas de conflit</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question35" class="Form-label-radio" checked >
            <span class="Form-label-text">Je me retire</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question35" class="Form-label-radio">
            <span class="Form-label-text">Je confronte</span>
        </label>
    </div>


    <div class="Form-section">
        <span class="Form-title"><label>Exigences</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="1" name="question36" class="Form-label-radio" checked >
            <span class="Form-label-text">Je cede facilement aux autres</span>
        </label>
        <label class="Form-label--tick">
            <input type="radio" value="2" name="question36" class="Form-label-radio">
            <span class="Form-label-text">Exigeant avec les autres</span>
        </label>
    </div>




   <p align='middle'>
          <INPUT TYPE='SUBMIT' align='right' CLASS='btn btn-info' name='submit' VALUE='Valider'>
          <INPUT TYPE='button' CLASS='btn btn-info' value='Annuler' onclick='location.href='home.php''>
         </p>
  
</form>
</div>

</body>
</html>