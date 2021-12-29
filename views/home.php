<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/home.css">
<script src="<?php echo BASE_URL; ?>assets/js/app_home.js"></script>
<div class="cinema">
    <div class="modal_view_filme">
        <div class="modal_filme">
            <div class="modal_filme_header">
                <div class="modal_filme_center">
                    <div class="modal_filme_left">
                        <p id="nome"></p>
                    </div>
                    <div class="modal_filme_right">
                        <button
                            onclick="fechar_modal_filme()"
                        ><img src="<?php echo BASE_URL; ?>assets/images/close.png" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="model_filme_bottom">
                <div class="moda_filme_img_area">
                </div>
            </div>
        </div>
    </div>
    <?php if(count($get_filmes) == 0): ?>
        <div class="home_404">
            <h1>Não há nada para mostrar aqui..</h1>
            <?php if($user_data['adm'] == 1): ?>
                <div class="adm_404">
                    <div class="adm_404_img">
                        <img src="<?php echo BASE_URL; ?>assets/images/crown_adm.png" alt="">
                    </div>
                    <div class="adm_404_links">
                        Acessar: 
                        <a href="<?php echo BASE_URL; ?>perfil/funcoes_crud"> Funções Crud</a>
                    </div>    
                </div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        
            <?php foreach($get_filmes as $filmes): ?>
                <div class="filme">
                    <div class="filme_header"><?php echo $filmes['nome']; ?></div>
                    <div class="filme_content">
                        <div class="fime_img_area">
                            <img 
                                src="<?php echo BASE_URL; ?>assets/images/cases/<?php echo $filmes['capa_img']; ?>"
                            >
                        </div>
                        <div class="filme_info_area">
                            <div class="filme_informacoes"><h2>Informações</h2></div>
                            <div class="filme_data">
                                <div class="filme_ask">Titulo:</div>
                                <div class="filme_answer"><?php echo $filmes['nome']; ?></div>
                                <div class="filme_ask">Data de Lançamento:</div>
                                <div class="filme_answer"><?php echo $filmes['data_lancamento']; ?></div>
                                <div class="filme_ask">Distribuidora:</div>
                                <div class="filme_answer"><?php echo $filmes['distribuidora']; ?></div>
                                <div class="filme_ask">Gêneros:</div>
                                <div class="filme_answer_generos">
                                    <a href="#">Ação</a>
                                    <a href="#">Aventura</a>
                                    <a href="#">Drama</a>
                                </div>
                                <div class="filme_ask">
                                    <button
                                        onclick="abrir_modal_view_filme(<?php echo $filmes['id']; ?>)"
                                    >+ Detalhes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        
    <?php endif; ?>
</div>