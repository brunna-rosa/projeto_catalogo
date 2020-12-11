<!DOCTYPE html>
<html>
<head>
	<title>	Catálogo de Filmes</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="center">
			<div class="header-left">
				<a href=""><img src="images/logo.png"></a>
				<div class="menu-header">
					<ul>
						<li><a href="">Início</a></l>
						<li><a href="#">Filmes</a></l>
						<li><a href="#">Séries</a></l>
						<li><a href="#">Minha Lista</a></l>
					</ul>	
				</div> <!-- menu-header -->
			</div> <!-- header-left -->
			<div class="clear"></div> <!-- clear -->
		</div>
	</header>

	<section class="destaque">
		<div class="overlay"></div> <!-- overlay -->
		<div class="texto">
			<h2>Assista filmes online</h2>
			<h3>Os mais novos lançamentos do cinema</h3>
			<br />
		</div> <!-- texto -->
		<div class="busca">
        	<form action="" method="get" id="frm1">
				<p> O que você quer assistir hoje?</p>
			    <div class="inner-form">
			    	<div class="input-field first-wrap">
		            	<input type="text" name="busca" id="search" />
		          	</div>
		          	<div class="input-field second-wrap">
		            	<div class="input-select">
			              <select data-trigger="" name="choices">
			                <option>Filme</option>
			                <option>Categoria</option>
			              </select>
		            	</div>
		            </div>
		            <div class="input-field third-wrap">
	            		<button type="submit" name="acao" value="Submit" class="btn-search" >Buscar</button>
	          		</div>
		        </div>	<!-- inner-form -->					
			</form>		    		
		</div> <!-- busca -->
	</section> <!-- destaque -->
