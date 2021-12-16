<!DOCTYPE html>
<html>
	<head>
		<title>Projeto - Cinema</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="header_main">
				<div class="header_left">
					<div class="header_left_img">
						<img src="<?php echo BASE_URL; ?>/assets/images/header_logo.png" alt="">
					</div>
					<div class="header_title"><a href="<?php echo BASE_URL; ?>">Cinemando</a></div>
				</div>
				<div class="header_right">
					<div class="header_right_top">
						<div class="top_content">
							<ul>
								<li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
								<li><a href="#">Filmes</a></li>
								<li><a href="#">Séries</a></li>
								<li><a href="#">Animes</a></li>
								<li><a href="#">Lançamentos</a></li>
								<li><a href="#">Gêneros</a></li>
							</ul>
							<form method="POST">
								<input type="text" name="buscar" placeholder="Pesquise por filmes, series e animes">
								<button type="submit" name="btn_pro">
									<img src="assets/images/lupa.png" width="30" height="30">
								</button>
							</form>
						</div>
						<div class="bottom_content">
							<div class="bottom_tags">
								<div class="tags">
									<div class="tags_list">
									<ul>
										<a href="#"><li>Ação</li></a>
										<a href="#"><li>Comedia</li></a>
										<a href="#"><li>Drama</li></a>
										<a href="#"><li>Terror</li></a>
										<a href="#"><li>Anime</li></a>
										<a href="#"><li>Crime</li></a>
										<a href="#"><li>Adulto</li></a>
										<a href="#"><li>Faroeste</li></a>
									</ul>
									</div>
									<div class="tags_list">
									<ul>
										<a href="#"><li>Fantasia</li></a>
										<a href="#"><li>Medieval</li></a>
										<a href="#"><li>Suspense</li></a>
										<a href="#"><li>Mistério</li></a>
										<a href="#"><li>Romance</li></a>
										<a href="#"><li>Aventura</li></a>
										<a href="#"><li>Ficção</li></a>
										<a href="#"><li>Músico</li></a>
									</ul>
									</div>
								</div>
							</div>
							<div class="bottom_user_margin">
								<div class="bottom_user">
									<?php if(!isset($_SESSION['cinemando']) && empty($_SESSION['cinemando'])): ?>
										<div class="bottom_user_img">
											<img src="<?php echo BASE_URL; ?>assets/images/users_img/default.png" alt="">
										</div>
										<div class="bottom_user_text">
											<a href="#">Minha Conta</a>
											<a href="#">Entrar/Registro</a>
										</div>
									<?php else: ?>
										<div class="bottom_user_img">
											<img src="<?php echo BASE_URL; ?>assets/images/users_img/default.png" alt="">
										</div>
										<div class="bottom_user_text">
											<a href="#"><?php echo $user_data['nome']; ?></a>
											<a href="<?php echo BASE_URL; ?>header/sair">Sair</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<?php $this->loadViewInTemplate($viewName,$viewData);?>
		</div>
	</body>
</html>