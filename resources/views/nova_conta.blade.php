<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="../sass/form.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<div class="main">
	  <br>
	       <ul>
		        <li><a href="/welcome">Home</a></li>
				<li class="active"><a href="#">Viagens</a></li>
				<li><a href="#">Solicitações</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li><a href="{{ route('login')}}">Iniciar Sessão</a></li>
		   </ul>
		   <div class="logo">
	                    <a class="btna">S.G.F.C</a>
	       </div>
	  
	  </div>

<form class="form" action="../lang/nova_viagem.blade.php" method="POST">  
<h1 CLASS="titulo"> NOVA CONTA</h1>
  <br> <input type="text" placeholder="Nome completo" name="name" required>
  <br>
 <br> <input type="text" placeholder="Número de BI" name="idcliente" required>
  
  
<option>Seleccione a Cidade</option>
<option>Maputo</option>
<option>Matola</option>
<option>Xai Xai</option>
<option>Inhambane Ceu</option>
<option>Beira</option>
<option>Tete</option>
<option>Nacala</option>
<option>Lichinga</option>
</select


  <input type ="submit" class="btn" name="submit" value="Submit">  
</form>

<div class="texto">

<svg height="130" width="500">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%"
      style="stop-color:rgba(60, 179, 113,0.4);stop-opacity:1" />
      <stop offset="80%"
      style="stop-color:hsla(147, 50%, 47%,0.7);stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
  <text fill="#ffffff" font-size="45" font-family="Verdana"
  x="50" y="86">SGFC</text>

</svg>

</div>

<div id="fim">
nvjreinjdnicdsanics<br>
</div>
</body>
</html>