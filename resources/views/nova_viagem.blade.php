<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="../sass/form.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<div class="main" style="background-image:'background-image:index.html;'">
	  <br>
	       <ul>
		        <li><a href="welcome.blade.php">Home</a></li>
				<li class="active"><a href="#">Viagens</a></li>
				<li><a href="#">Solicitações</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li><a href="/index">Sair</a></li>
		   </ul>
		   <div class="logo">
	                    <a class="btna">S.G.F.C</a>
	       </div>
	  
	  </div>

<form class="form" action="../lang/nova_viagem.blade.php" method="POST">  
<h1 CLASS="titulo"> NOVA VIAGEM</h1>
  <br> <input type="text" placeholder="Nome completo" name="name" required>
  <select class="selector" name="cPartida">
          <option>Seleccione o ponto de partida</option>
          <option>Maputo</option>
          <option>Matola</option>
          <option>Xai - Xai</option>
          <option>Inhambane - Céu</option>
          <option>Beira</option>
          <option>Tete</option>
          <option>Nacala</option>
          <option>Lichinga</option>
        </select>
  <br>
 <br> <input type="text" placeholder="Número de BI" name="idcliente" required>
  
  <select class="selector" name="provincia" required>
          <option>Seleccione a Provincia de chegada</option>
          <option>Maputo</option>
          <option>Gaza</option>
          <option>Inhambane</option>
          <option>Manica</option>
          <option>Sofala</option>
          <option>Tete</option>
          <option>Cabo Delgado</option>
          <option>Zambézia</option>
          <option>Sofala</option>
        </select>

<br>		
  <text class="data">Data de partida</text></br>
  <input type="date" id="data1" name="dPartida" required>

  <select class="selector" name="city" required>
<option>Seleccione a Cidade de Chegada</option>
<option>Maputo</option>
<option>Matola</option>
<option>Xai Xai</option>
<option>Inhambane Ceu</option>
<option>Beira</option>
<option>Tete</option>
<option>Nacala</option>
<option>Lichinga</option>
</select>

  <br><text class="data">Data de partida</text>
  <br> <input type="date" id="data1" name="dChegada" required>
  <select class="selector" name="distrito" required>
<option>Seleccione o distrito</option>
<option>Maputo</option>
<option>Bla Bla</option>
<option>Inhambane</option>
<option>Manica</option>
<option>Sofala</option>
<option>Tete</option>
<option>Cabo Delgado</option>
<option>Zambezia</option>
<option>Sofala</option>
</select>
  <br><br>
  
  <input type="text" name="peso" placeholder="Peso da Carga" required>


<select id="entradas" class="selector" name="carga" required>
<option>Seleccione o tipo de carga</option>
<option>Combustiveis</option>
<option>Produtos Comerciais</option>
<option>Mobiliario</option>
</select>

  <input type ="submit" class="btn" name="submit" value="Solicitar">  
</form>


<section class="fim">
<br>
<p class="logo2">SISTEMA DE GESTÃO DE FROTA DE CAMIÕES</p>
<br>
<br>
<br>


</section>
</body>
</html>