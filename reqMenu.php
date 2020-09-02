<?php
    session_start();
    require_once 'conexao.php';

    if (!isset($_SESSION['logado'])) :
        header("Location: 404.php");
    endif;

    $idUsuario = $_SESSION['idUsuario'];
    $query = "SELECT nomeUsuario, fotoUsuario FROM usuario WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($conexao, $query);   
    $info = mysqli_fetch_array($resultado);
?>
<div class="navbar-fixed">
    <nav class="grey darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a class="brand-logo"><i class="fas fa-gamepad"></i> progGame</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">clear_all</i>
                </a>
                <ul class="right">
                    <li>
                        <a class="transparent" disable>Olá <?php echo $info['nomeUsuario'] ?></a>
                    </li>
                    <li>
                        <a href="perfil.php" class="transparent"><img class="circle icon-user" src="upload/<?php echo $info['fotoUsuario'] ?>"></a>
                    </li>
                    <li>
                        <div class="dividerVert"></div>
                    </li>
                    <li>
                        <a class="btn-flat btnDefault modal-trigger" href="processaLogout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>