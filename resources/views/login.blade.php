<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>SGFC - Login</title>
<link rel="stylesheet" href="../sass/style.css">
</head>
<body>
<header>
<form class="login-box" method="POST" action="../lang/login.blade.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  >

<h1>Login</h1>
   <div class="textbox">
   <i class="fa fa-user" aria-hidden="true"></i>
   <input type="text" placeholder="Nome de Usuário" name="username" value="" required>
   </div>
   
   <div class="textbox">
   <i class="fa fa-lock" aria-hidden="true"></i>
   <input type="password" placeholder="Senha" name="password" value="" required>
   </div>
   
   <input class="btn" type="submit" name="" value="Entrar">
 
 </form>

</header>
<p id="demo"></p>

<script>
function myFunction() {
    var txt = "";
    if (document.getElementById("id1").validity.rangeOverflow) {
       txt = "Value too large";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script> 
</body>
</html>