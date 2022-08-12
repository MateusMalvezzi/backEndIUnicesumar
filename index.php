<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="Conheça a Dona Dirce" alt="Conheça a Dona Dirce">Conheca a Dona Dirce</a></li>
                <li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa da Dona Dirce, e escolha a sua marmita.</h1>
                    </header>
                    <p> Confira os artigos e tutoriais</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Confira nossas  marmitas</h1>
				<p>Aqui, você encontra o nosso cardápio.</p>
			</header>
			<?php
				foreach($pratos as $key => $value){                
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
				}
			?>
		</section>
	</main>
    <section >
        <div class="rodape">
                    <div>
                        <h4 style= "color:black">Nossas páginas </h4><br>
                        <a class="a-footer" href="index.php">Home</a><br><br>
                        <a class="a-footer" href="index.php">Blog</a><br><br>
                        <a class="a-footer" href="index.php">Conheça a Dona Dirce</a><br><br>
                        <a class="a-footer" href="index.php">Contato</a><br><br>
                    </div> 

                    <div>
                        <h4 style= "color:black">Links Úteis </h4><br>
                        <a class="a-footer" href="https://legalcloud.com.br/modelo-politica-privacidade/
                        #Modelo_de_Politica_de_Privacidade_da_Legalcloud_Copie_e_Cole" target="_blank">Politica de Privacidade</a><br><br>
                        <a class="a-footer" href="https://www.lafonte.com.br/pt-br/aviso_legal#:~:text=Estamos%20concedendo%20uma%20licen%C3%A7a%20n%C3%A3o,
                        uma%20organiza%C3%A7%C3%A3o%2C%20produto%20ou%20servi%C3%A7o."target="_blank">Aviso Legal</a><br><br>
                        <a class="a-footer" href="https://diegocastro.adv.br/modelo-de-termos-de-uso-para-blogs-e-sites/"target="_blank">Termos de Uso</a><br><br><br><br>
                    </div>  

                    <div>
                        <h4 style= "color:black">Sobre o projeto </h4><br>
                        <a class="a-footer" href="index.php">Projeto de divulgação das marmitas da Dirce.</a><br><br><br><br><br><br><br><br>
                    </div>
        </div>
    </section>
    <footer>
        <div>
            <h4 id="h=foot">Desenvolvido por Mateus Malvezzi © - R.A - 21141960-5</h4>
        </div>
    </footer>
</body>
</html>