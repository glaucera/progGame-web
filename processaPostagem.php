<?php

require_once 'conexao.php';
session_start();
echo "<meta charset='utf-8'/>";

$tituloPostagem = $_POST['tituloPostagem'];
$subtituloPostagem = $_POST['subtituloPostagem'];
$textoPosta = $_POST['textoPosta'];
$categoriaPostagem = $_POST['categoriaPostagem'];
$dataPostagem = $_POST['dataPostagem'];
$fotoPostagem = $_FILES['fotoPostagem'];

$data = explode(52,$dataPostagem);
echo $data[1];


if (empty($tituloPostagem) || empty($subtituloPostagem) || empty($textoPosta) || empty($categoriaPostagem) || empty($fotoPostagem)) { ?>
    <script>
        alert('Algum dos campos está vazio. Preenchá - o');
        location.href = 'criaPostagem.php';
    </script>
    <?php
    } else {
        if (!preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $fotoPostagem["name"], $ext)) { ?>
        <script>
            alert('Ops! O arquivo selecionado não é uma imagem');
            location.href = 'criaPostagem.php';
        </script>
        <?php
    } else {
        preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $fotoPostagem["name"], $ext);

        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        $caminho = "upload/" . $nome_imagem;

        $query = "INSERT INTO postagem (tituloPostagem,subtituloPostagem,textoPosta,fotoPostagem,dataPostagem,idCategoria,idUsuario) VALUES
        ('$tituloPostagem','$subtituloPostagem','$textoPosta','$fotoPostagem[name]','$data[1]',$categoriaPostagem,$_SESSION[idUsuario]);";
        $insere = mysqli_query($conexao, $query);

        if($insere == 1 ){
            echo "<script> alert('Postagem criada com sucesso!!!');location.href ='listaPostagem.php'</script>";
        }

    }
}



?>