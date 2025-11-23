<?php
// Calcula o caminho base relativo a partir da pasta do projeto
$baseUrl = dirname(dirname($_SERVER['PHP_SELF']));
?>
<header class="d-flex flex-wrap">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="<?= htmlspecialchars($baseUrl) ?>/usuario/index.php"><img src="<?= htmlspecialchars($baseUrl) ?>/assets/Logo%20infantil.png" alt="Logo do site"></a>

        <div class="collapse navbar-collapse" id="menuNav">
        </div>

        <?php if (isset($_SESSION['usuario_nome'])): ?>
        <div class="usuario-logado">
            <span>Logado como: <strong><?= htmlspecialchars($_SESSION['usuario_nome']) ?></strong></span>
        </div>
        <?php endif; ?>

        <div class="denunciar">
            <button onclick="window.history.back()" class="btn btn-denunciar">Voltar</button>
        </div>
    </nav>
</header>