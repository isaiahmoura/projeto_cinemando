<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css">
<main class="main">
    <div class="login">
        <div class="login_logo">
            <img src="<?php echo BASE_URL; ?>assets/images/header_logo.png" alt="">
            <div class="logo_text"><h3>Projeto - Cinemando</h3></div>
        </div>
        <div class="login_content">
            <div class="login_content_header">Minha Conta</div>
                <form method="POST">
                    <div class="form_input">
                            
                        <input type="email" name="email" placeholder="E-mail">
                        <input type="password" name="senha" placeholder="Senha">
                            
                        <?php if(isset($_SESSION['erro_box']) && !empty($_SESSION['erro_box'])):?>
                            <div class="error_box"><?php echo $_SESSION['erro_box']; ?></div>
                        <?php endif; ?>
                            
                        <button type="submit" name="login">Entrar</button>

                        <div class="form_link">
                            Ainda não têm uma conta? <a href="#"> Clique aqui</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>