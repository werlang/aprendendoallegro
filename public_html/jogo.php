<!DOCTYPE html>
<head>
<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Aprendendo Allegro 5 - Jogo</title>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="script/popups.js"></script>
<script src="script/buttons.js"></script>
<link rel="stylesheet" href="css/stylesheet.css"/>
<link rel="stylesheet" href="css/popups.css"/>
<link rel='stylesheet' href='css/responsive.css'/> 
<link rel='stylesheet' href='css/buttons.css'/> 


<style>
	#mario { width: 128px; }
</style>
</head>
<body>
<?php include_once("functions.php"); ?>
<?php include_once("side_menu.php"); ?>

<div class='page-wrapper'>
	<div class="container">
		<div class='col-m-12'>
			<h1>Criando um jogo</h1>
						
			<p>Criar um jogo é uma tarefa muito mais complexa que seguir exemplos de um site. Abaixo disponibilizo dois jogos que criei para servir de exemplo</p>
			
			<h3>Horda Orc</h3>
			<p>Horda orc é um jogo <a target='_blank' href='https://pt.wikipedia.org/wiki/Arcade'>estilo arcade</a> onde o jogador assume o papel de um arqueiro elfo que está encurralado por orcs e deve matar a maior quantidade que conseguir para sobreviver por mais tempo.</p>
			<ul>
				<li><a href='ccode/horda/source/hunt.c' download>Código fonte</a></li>
				<li><a href='ccode/horda/horda_setup.exe' download>Pacote de instalação</a></li>
				<li><a href='ccode/horda/horda.zip' download>Arquivo compactado</a></li>
			</ul>
			
			<h3>Fuga do Coelho</h3>
			<p>A Fuga do Coelho é um jogo também estilo arcado que coloca o jogador na pele de um coelho que se vê em meio a uma floresta em chamas. Ele deve correr, desviar de árvores e coletar cenouras para conseguir chegar até uma zona segura. </p>
			<ul>
				<li><a href='ccode/bunnyrun/main.c' download>Código fonte</a></li>
				<li><a href='ccode/bunnyrun/fuga_setup.exe' download>Pacote de instalação</a></li>
				<li><a href='ccode/bunnyrun/bunnyrun.zip' download>Arquivo compactado</a></li>
			</ul>

		</div>
		<div id='btn-footer'>
			<a class="button-red" href='sprites.php'>Anterior</a>
		</div>
	</div>
</div>
</body>
<script src="script/line_link.js"></script>
