<!DOCTYPE html>
<html>
<head>
<title>Frota de Camioes</title>
<link rel="stylesheet" href="../sass/home.css">
</head>
<style> 
input[type=text]{
    width:18%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	margin-top:30px;
	margin-left:70%;
}
input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:67%;
	margin-top:5px;
}


.footer {
   left: 0;
   bottom: 0;
   height:45px;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

.hidden {
    display:none;
}

.hidden1 {
    display:none;
}
</style>

<script>
function myFunction() {
    document.getElementById("hidden").style.display = "block";
}

function myFunction1() {
    document.getElementById("hidden1").style.display = "block";
}
</script>

<body>
<header>
      <div class="main">
	  <br>
	       <ul>
		        <li class="active"><a href="#">Home</a></li>
				<li><a href="pesquisag.blade.php">Viagens</a></li>
				<li><a>Solicitações</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li><a href="index.blade.php">Sair</a></li>
		   </ul>
		   <div class="logo">
	                    <a class="btn">S.G.F.C</a>
	       </div>
		   
	  <form class="hidden" id="hidden" method="post" action="pesquisa.blade.php"><br>
<input type="text" id="hidden" name="id" placeholder="BI"><br>
<input type="submit" value="GO">
</form>
<form class="hidden1" id="hidden1" method="post" action="pesquisav.blade.php"><br>
<input type="text" id="hidden" name="id" placeholder="BI"><br>
<input type="submit" value="GO">
</form>
	  </div>
	  <div class="title">
	  <h1> FROTA DE CAMIOES</h1>
	  </div>
	  
	  <div class="button">
	  <a href="solicitacoes.blade.php" class="btn">CRIE UMA VIAGEM</a>
	<!--
 <a href="login.blade.php" class="btn">INICIAR SECÇÃO</a> -->
	  </div>

</header>


<br>
<h1 style="text-align:center; font-size:200%;">Informação Geral</h1>
 
				<p style="text-align:center; font-size:120%; font-family:courier;"><strong>INDIVIDUALIDADE:</strong> Consideramos cada colaborador como unico, reconhecendo as diferênças
				de valores individuais e culturais.</p>
				<p style="text-align:center;  font-size:120%; font-family:courier;"><strong>SOCIEDADE:</strong> Promoção de uma política de interação com a sociedade no sentido de
				desenvolvimento sustentado.</p>
				<p style="text-align:center;  font-size:120%; font-family:courier;"><strong>SEGURANÇA E SAÚDE NO TRABALHO:</strong> Optimizamos as condições de trabalho para
				se reflectir num melhor desempenho dos trabalhadores e, consequentemente, numa
				maior produtividade melhor qualidade e redução dos custos directos e indirectos.</p>
				<p style="text-align:center;  font-size:120%; font-family:courier;"><strong>DESENVOLVIMENTO PROFISSIONAL:</strong> Criamos um ambiente que permite as pessoas
				desenvolverem as suas capacidades, a sua criatividade e sua motivação.</p>
			 

<br>
<br>
<br>
<br>
<br>
fgthoigfcxd<br>

<div class="footer">
  <p>FROTA Ltd</p>
</div>
<div>
</body>
</html>