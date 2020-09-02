<?php require_once 'reqHeader.php' ?>

<?php require_once 'reqMenu.php';

      require_once 'conexao.php'
?>


<div class="container containerMargin">
  <div class="row">
    <div class="col s12">
      <?php
        $query = "SELECT idPostagem, tituloPostagem, subtituloPostagem,fotoPostagem,textoPosta,dataPostagem, idCategoria, idUsuario  FROM postagem where idPostagem = 1";
        $listar = mysqli_query($conexao,$query);
        $mostra = mysqli_fetch_array($listar);
        echo "<img src='adfjy.jpg' width='100%'>
        <p class='flow-text'>Postado em 01/12/2019 • RPG • $mostra[idUsuario] </p>
        <h3>$mostra[tituloPostagem]</h3>
        <h4>$mostra[subtituloPostagem]</h4>
        <p class='flow-text'>
         $mostra[textoPostagem]
        </p> 
        <h6 style='float: right;'>sadfljyfsasjhn</h6>"
        ?>
      <h4>Comentários</h4>
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="title">Otavio Barreto</span>
          <p>
            duris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque,
          </p>
        </li>
      </ul>
      <form action="" class="containerMargin">
        <div class="input-field col s10">
          <textarea placeholder="Comentário" class="materialize-textarea"></textarea>
        </div>
        <div class="input-field col s2">
          <button type="submit" class="btn-flat btnDefaultDark btnBlock">
            Enviar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once 'reqFAB.php' ?>

<?php require_once 'reqFooter.php' ?>

<?php require_once 'reqScript.php' ?>