<!DOCTYPE html>
<head>
<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Aprendendo Allegro 5 - Imagens</title>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="script/popups.js"></script>
<script src="script/buttons.js"></script>
<link rel="stylesheet" href="css/stylesheet.css"/>
<link rel="stylesheet" href="css/popups.css"/>
<link rel='stylesheet' href='css/responsive.css'/> 
<link rel='stylesheet' href='css/buttons.css'/> 

<style>
	img#hu3 { width: 200px; }
	#img-coord {width: 500px; }
</style>
</head>
<body>
<?php include_once("functions.php"); ?>
<?php include_once("side_menu.php"); ?>

<div class='page-wrapper'>
	<div class="container">
		<div class='row'>
			<div class='col-m-12'>
				<h1>Manipulando imagens</h1>
				
				<p>Neste exemplo vamos trabalhar com imagens. Este é o primeiro passo que tornará possível criar animações.</p>
				
				<p>Analise o exemplo:</p>
							
				<pre class="prettyprint linenums" id='codigo'><?php printfile('ccode/imagem.c'); ?></pre>
				
				<p>Na <span class='linha' data-ln='5'>linha 5</span> fazemos o include do módulo allegro_image, que permite trabalhar com imagens tipo bmp e png.</p>
				
				<h2><a target='_blank' href='https://www.allegro.cc/manual/5/ALLEGRO_BITMAP'>ALLEGRO_BITMAP</a></h2>
				<p>Na <span class='linha' data-ln='13'>linha 13</span> criamos um ponteiro chamado imagem do tipo ALLEGRO_BITMAP. Este tipo de ponteiro serve para criar uma imagem, que posteriormente será desenhada em uma tela (ALLEGRO_DISPLAY).</p>
				
				<h2><a target='_blank' href='https://www.allegro.cc/manual/5/al_init_image_addon'>al_init_image_addon()</a></h2>
				<p>Na <span class='linha' data-ln='19'>linha 19</span> chamamos a função al_init_image_addon(), que serve para inicializar o módulo que manipula imagens.</p>

				<h2><a target='_blank' href='https://www.allegro.cc/manual/5/al_load_bitmap'>al_load_bitmap()</a></h2>
				<p>Na <span class='linha' data-ln='25'>linha 25</span> chamamos a função al_load_bitmap(), que serve para carregar uma imagem do disco. A função recebe por parâmetro uma string com o caminho da imagem desejada. No exemplo foi usado a imagem abaixo, mas você pode substituir esta string por outra qualquer que reflita o caminho de uma imagem qualquer, ou colocar só o nome da imagem se ela estiver na mesma pasta do seu programa. Como a função retorno um ponteiro ALLEGRO_BITMAP, atribuímos a chamada da função à variável imagem.</p>
				
				<div class='imagem'>
					<img id='hu3' src='ccode/hu3.bmp' >
					<label>hu3hu3hu3</label>
				</div>

				<h2><a target='_blank' href='https://www.allegro.cc/manual/5/al_draw_bitmap'>al_draw_bitmap()</a></h2>

				<p>Na <span class='linha' data-ln='28'>linha 28</span> chamamos a função al_draw_bitmap(), que serve para desenhar uma imagem. Ela recebe por parâmetro a imagem (ALLEGRO_BITMAP) que desejamos desenhar, e dois valores, representando as coordenadas X e Y que a imagem será desenhada. O quarto parâmetro representa flags 	que indicam se o bitmap será desenhado espelhado ou não. Use 0 caso não seja do interesse, como no exemplo.</p>
				
				<div class='imagem'>
					<img id='img-coord' src='img/screencoord.jpg' >
					<label>Coordenadas X e Y da tela</label>
				</div>

				<p>Caso deseje mostrar na tela uma imagem redimensionada ou rotacionada, use as funções:</p>

				<ul>
					<li><a target='_blank' href='https://www.allegro.cc/manual/5/al_draw_rotated_bitmap'>al_draw_rotated_bitmap()</a></li>
					<li><a target='_blank' href='https://www.allegro.cc/manual/5/al_draw_scaled_bitmap'>al_draw_scaled_bitmap()</a></li>
					<li><a target='_blank' href='https://www.allegro.cc/manual/5/al_draw_scaled_rotated_bitmap'>al_draw_scaled_rotated_bitmap()</a></li>
				</ul>	
				
				<p>Note que a função al_draw_bitmap() irá desenhar a imagem na janela. Porém, nem sempre será assim. A função al_draw_bitmap() desenha a imagem no bitmap ativo. O que significa isso?</p>
				
				<p>O allegro sempre tem definido um bitmap como sendo o bitmap ativo. E todas funções que desenham um bitmap, usam este bitmap como alvo. O alvo nesse nosso exemplo, é a janela (último display criado). Veremos mais adiante como mudar o bitmap ativo.</p>
				
				<p>O resultado do programa acima será o surgimento da mesma tela do exercício passado, com uma imagem por cima. Após 10 segundos, esta tela some e o programa encerra.</p>
				
				<h2><a target='_blank' href='https://www.allegro.cc/manual/5/al_get_bitmap_width'>al_get_bitmap_width()</a> e <a target='_blank' href='https://www.allegro.cc/manual/5/al_get_bitmap_height'>al_get_bitmap_height()</a></h2>

				<p>Caso deseje saber a largura ou altura de um bitmap, chamamos as funções al_get_bitmap_width() e al_get_bitmap_height(), respectivamnte. Elas recebem o bitmap como parâmetro, e retornam o tamanho em pixels do bitmap.</p>

				<h3>Download dos arquivos</h3>
				<ul>
					<li><a href='ccode/hu3.bmp' download>Imagem</a></li>
				</ul>

				<h3>Outros links</h3>
				<ul>
					<li><a target='_blank' href='http://www.rafaeltoledo.net/tutorialallegro-5-2-colocando-uma-imagem-na-tela/'>Colocando uma Imagem na Tela</a></li>
					<li><a target='_blank' href='https://wiki.allegro.cc/index.php?title=Basic_tutorial_on_loading_and_showing_images'>Basic tutorial on loading and showing images</a></li>
				</ul>
			</div>
			<div id='btn-footer'>
				<a class="button-red" href='janela.php'>Anterior</a>
				<a class="button-red" href='mensagem.php'>Próximo</a>
			</div>
		</div>
	</div>
	
</div>
</body>
<script src="script/line_link.js"></script>
