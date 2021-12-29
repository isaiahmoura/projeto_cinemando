<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/perfil.css">
<div class="modal">
    <div class="modal_content">
        <div class="modal_header">
            <div class="modal_left">Adicione um novo filme</div>
            <div class="modal_right">
                <button onclick="fechar_modal()">
                    <img src="<?php echo BASE_URL; ?>assets/images/close.png" alt="">
                </button>
            </div>
        </div>
        <div class="modal_form">
            <form method="POST"  enctype="multipart/form-data">
                <div class="input_space">
                    <input type="text" name="filme_titulo" placeholder="Título do filme">
                    <input type="text" name="filme_data" placeholder="Data de lançamento">
                </div>
                <div class="input_space_radio">
                    <label for="filme_img">Selecione capa do filme</label>
                    <input type="file" id="filme_img" name="file_img">
                </div>
                <div class="input_space_radio">
                    <label for="radio">Selecione os gêneros do filme</label>
                    <div class="radio">
                        <?php foreach($getGeneros as $generos): ?>
                            <input 
                                type="radio" name="filme_generos"
                            ><?php echo $generos['genero_nome']; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="modal_button">
                    <button type="submit" name="finalizar_adicao">Finalizar Adição</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="crud">
    <div class="crud_header">
        <div class="crud_left">Filmes</div>
        <div class="crud_right">
            <button onclick="abrir_modal_crud()">Novo Filme</button>
            <button onclick="refresh()" class="atualizar_button">Atualizar</button>
        </div>
    </div>
    <div class="crud_names">
        <div class="filme_id">ID</div>
        <div class="filme_nome">NOME</div>
        <div class="filme_capa">CAPA</div>
        <div class="filme_lancamento">LANÇAMENTO</div>
        <div class="filme_generos">GÊNEROS</div>
        <div class="filme_acoes">AÇÕES</div>
    </div>
    <?php if(count($get_filmes) > 0): ?>
        <?php foreach($get_filmes as $filmes): ?>
            <div class="crud_filmes">
                <div class="filme_id"><?php echo $filmes['id']; ?></div>
                <div class="filme_nome"><?php echo $filmes['nome']; ?></div>
                <div class="filme_capa">
                    <img 
                        src="<?php echo BASE_URL; ?>assets/images/cases/<?php echo $filmes['capa_img']; ?>"
                    >
                </div>
                <div class="filme_lancamento"><?php echo $filmes['data_lancamento']; ?></div>
                <div class="filme_generos">Nenhum</div>
                <div class="filme_acoes">
                    <button
                        onclick="modal_visualizar()"
                    >Visualizar</button>
                    <button class="crud_editar">Editar</button>
                    <button 
                        class="crud_excluir"
                        onclick="delete_filme_crud(<?php echo $filmes['id']; ?>,this)"
                    >Excluir</button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="crud_filmes2">
            <h1>Não há nada para mostrar aqui...</h1>
        </div>
    <?php endif; ?>
</div>