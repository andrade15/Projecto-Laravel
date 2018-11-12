<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta charset="utf-8">
<title>SGFC - Login</title>
<link rel="stylesheet" href="../sass/style.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome de usuário requerido";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Somente letras e espaços brancos são requeridos"; 
    }
  }
  

  if (empty($_POST["pass"])) {
    $pass = "";
  } else {
    $pass = test_input($_POST["pass"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<header>
<h1>Login</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <div class="textbox">
   <i class="fa fa-user" aria-hidden="true"></i>
  <input type="text" placeholder="Nome de Usuário" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
   </div>
   
 <div class="textbox">
 <i class="fa fa-lock" aria-hidden="true"></i>
 <input type="password" placeholder="Senha" name="palavra-passe" value="<?php echo $pass;?>">
  </div>
  <input type="submit" name="submit" value="Entrar">  
</form>

</header>
<?php
echo $name;
echo "<br>";
echo $pass;
if ($pass!=1){
	echo "uef2wjdbhfj";
}
echo "<br>";
?>






</body>
</html>