<!DOCTYPE>
<html>
<head>
    <title>SOLICITACAO DE VIAGEM</title>
    <link rel="stylesheet" href="../sass/solicitar.css">
</head>

<body>
<div class="main">
	  <br>
	       <ul>
		        <li class="active"><a href="#">Home</a></li>
				<li><a href="#">Servicos</a></li>
				<li><a href="#">Parceiros</a></li>
				<li><a href="#">Sobre nos</a></li>
				<li><a href="#">Contacte - nos</a></li>
		   </ul>
	  
	  </div>
      <div id="container">
	     
		 <img class="slides" src="../views/images/2.png"/>
		 <img class="slides" src="../views/images/3.jpg"/>
		 <img class="slides" src="../views/images/1.jpg"/>
	  </div>
	  
	  <h1 class="titulo">dwaghdasghayuhfwoisui
	  hjchjcabkckbca<br>
	  aschjbvcasv<br>
	  ashgasygas</h1>
</body>
<script>
var index =2;
showImage();
function showImage(){
	var i;
	var x = document.getElementsByClassName("slides");
	for (i=0; i<x.length; i++){
		x[i].style.display ="none";  
	}
	index ++;
	if (index>x.length){index=1};
	x[index-1].style.display="block"
	setTimeout(showImage, 5000);
}

</script>
</html>