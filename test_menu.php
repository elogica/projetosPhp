<?php
session_start();
$a = session_id();

?>
<html>
<head>
<style type = "text/css">
#imagem
{
	position: relative;
	float:left;
	width: 200px;
	height: 100px;
}
.btn
{
	position: relative;
	width: 100%;
	height: 23%;
	display: block;
	color: white;
	background: green;
	border: solid white 1px;
	border-left: none;
	text-align: center;
}
#geral_menu
{
	background: black;
	width:auto;
	height: auto;
}
#menu
{
	position: relative;
	float:left;
	background: green;
	width: 200px;
	height: 100px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type = "text/javascript">
$(document).ready(function(){
	$("#menu").hide();
	$("#s").click(function(){
			$("#menu").toggle("slide", {direction: "left"});
		});

});
</script>
</head>
<body>
<div id = "geral_menu">
<img src = "imagens/imagem.jpg" id = "imagem"/>
<div id = "menu"><a href = "" class = "btn">Home</a><a href = "" class = "btn">Funcionarios</a><a href = "" class = "btn">Notas Fiscais</a><a href = "" class = "btn">Sair</a></div>
</div>
</body>
</html>