<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $userErr =$passErr = $cpassErr = $apelidoErr = $biErr =$cidadeErr = $emailErr = $genderErr = $websiteErr = "";
$name = $user = $pass = $cpass= $apelido = $bi = $email = $cidade = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["user"])) {
    $userErr = "*";
  } else {
    $user = test_input($_POST["user"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "*";
  } else {
    $pass = test_input($_POST["pass"]);
  }
  
  if (empty($_POST["cpass"])) {
    $cpassErr = "*";
  } else {
    $cpass = test_input($_POST["cpass"]);
  }
  
  if (empty($_POST["apelido"])) {
    $apelidoErr = "*";
  } else {
    $apelido = test_input($_POST["apelido"]);
  }
  if (empty($_POST["cidade"])) {
    $apelidoErr = "*";
  } else {
    $apelido = test_input($_POST["apelido"]);
  }
  
  if (empty($_POST["bi"])) {
    $biErr = "*";
  } else {
    $bi = test_input($_POST["bi"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "*";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">*</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Apelido: <input type="text" name="apelido">
  <span class="error"> <?php echo $apelidoErr;?></span>
  <br><br>
  
  Número de BI: <input type="text" name="bi">
  <span class="error"> <?php echo $biErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  
  <select name="cidade">
<option>Seleccione a Cidade</option>
<option>Maputo</option>
<option>Matola</option>
<option>Xai - Xai</option>
<option>Inhambane - Céu</option>
<option>Beira</option>
<option>Tete</option>
<option>Nacala</option>
<option>Lichinga</option>
</select><br><br>
  
  User: <input type="text" name="user">
  <span class="error"> <?php echo $userErr;?></span>
  <br><br>
  
  Password: <input type="password" name="pass">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  
  Re - Password: <input type="password" name="cpass">
  <span class="error"> <?php echo $cpassErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $user;
echo "<br>";
echo $pass;
echo "<br>";
echo $cpass;
echo "<br>";
echo $apelido;
echo "<br>";
echo $bi;
echo "<br>";
echo $email;
echo "<br>";
echo $cidade;

?>

</body>
</html>