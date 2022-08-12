<?php
	include("dados.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">

    <style>

.main_tutorial img{
    width: 100%;
}

.main_tutorial p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_tutorial h3{
    font-size: 0.9em;
}

.main_tutorial article{
    flex-basis: 50%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
<header>
		<nav>
			<ul>
				<li><a href="index.php" title="Home" alt="Home">Home</a></li>
				<li><a href="index.php" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="index.php" title="Conheca a Dona Dirce" alt="Conheca a Dona Dirce">Conheca a Dona Dirce</a></li>
                <li><a href="index.php" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">

			<header class="main_tutorial_header">
				<h1>Nosso Ultimos tutoriais</h1>
				<p>Desfrute dos tutoriais, eles vão lhe auxiliar nesta caminhada!</p>
			</header>
			<?php
                $id = $_GET['id'];

				foreach($pratos as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
                <p><?=$value['preco'];?></p>
				<p><?=$value['contato'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver outras receitas</h1>
			</header>
			<?php
				foreach($pratos as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
			
		</section>



		<section >
        <div class="rodape">
                    <div>
                        <h4 style= "color:black">Nossas páginas </h4><br>
                        <a class="a-footer" href="index.php">Home</a><br><br>
                        <a class="a-footer" href="sobre.php">Blog</a><br><br>
                        <a class="a-footer" href="dicas.php">Conheça a Dona Dirce</a><br><br>
                        <a class="a-footer" href="videos.php">Contato</a><br><br>
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