<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/perfil.css">
<div class="perfil">
    <div class="perfil_img">
        <img src="<?php echo BASE_URL; ?>assets/images/users_img/default.png">
        <div class="perfil_nome">Isaias Moura</div>
    </div>
    <div class="perfil_data">
        <div class="tipo_crown">
            <?php if($user_info['adm'] == 1): ?>
                <img src="<?php echo BASE_URL; ?>assets/images/crown_adm.png" alt="">
            <?php else: ?>
                <img src="<?php echo BASE_URL; ?>assets/images/crown_membro.png" alt="">
            <?php endif; ?>
        </div>
        <div class="perfil_buttons">
            <button>Função Crud (ADM)</button>
            <button 
                onclick="window.location.href = '<?php echo BASE_URL; ?>perfil/funcoes_crud';">Funções Crud (ADM)
            </button>
            <button>Editar Perfil</button>  
        </div>
    </div>
</div>