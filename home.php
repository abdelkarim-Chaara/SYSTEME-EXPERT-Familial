 
<?php

session_start();



if (isset($_POST['submit'])) {

  if((empty($_POST['nom'])) || (empty($_POST['prenom'])) || (empty($_POST['age'])) || (empty($_POST['ville']))  )

  {

echo " <script>alert('Fill All Fields .')</script>";


  } else {


if(isset($_POST['nom']))
{
$_SESSION['nom']=$_POST['nom'] ;

}


if(isset($_POST['prenom']))
{
    $_SESSION['prenom']=$_POST['prenom'] ;

}
if(isset($_POST['age']))
{
    $_SESSION['age']=$_POST['age'] ;

}

if(isset($_POST['sexe']))
{
    $_SESSION['sexe']=$_POST['sexe'] ;

}
if(isset($_POST['ville']))
{
$_SESSION['ville']=$_POST['ville'] ;

header("location:choice.php");
}

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">

<div class="container">
  <h2 align="center">Presentez Vous SVP</h2><br><br><br><br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nom</label>
      <div class="col-sm-10">
        <input class="form-control" name="nom" id="focusedInput" type="text" value="">
      </div> <br><br><br><br>
<label class="col-sm-2 control-label">Prenom</label>
      <div class="col-sm-10">
        <input class="form-control" name="prenom" id="focusedInput" type="text" value="">
      </div><br><br><br><br>
  <label for="sel1" class="col-sm-2 control-label" >Sexe</label>
  <select style="margin-left: 12px; margin-top: 3px "  class="col-sm-2 control-label" name="sexe" id="sel1">
    <option value="Male" selected="selected" >Male</option>
    <option value="Female">Female</option>
  
  </select>

<br><br><br><br>
<label class="col-sm-2 control-label">Age</label>
      <div class="col-sm-10">
        <input class="form-control" name="age" id="focusedInput" type="number" value="">
      </div> <br><br><br><br>

<label class="col-sm-2 control-label">Ville</label>
      <div class="col-sm-10">
        <input class="form-control" name="ville" id="focusedInput" type="text" value="">
      </div> <br><br><br><br>

<INPUT  TYPE='SUBMIT' style='margin-left: 50%; height: 50px; width: 120px' CLASS='btn btn-primary' name='submit' VALUE='Valider'>

     </div>


  </form>
    </div>
    
</body>
</html>
