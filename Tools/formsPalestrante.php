<?php

if (isset($_POST['submit'])) {

    include '../BD/conexao.php';

    $nome =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
    $arquivo = $_FILES['imagem'];
    if ($arquivo['error']) die("Falha ao enviar a foto");
    $pasta = '../../uploads/fotos/';
    $nome_foto = $arquivo['name'];
    $novo_nome = uniqid();
    $extensao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));
    if ($extensao != 'jfif' && $extensao != 'jpeg') die("falha ao enviar o arquivo");
    $path = $pasta . $novo_nome . '.' . $extensao;

    $foto = move_uploaded_file($arquivo['tmp_name'], $path);

    $result = mysqli_query($conexao, "INSERT INTO palestrante (nome,imagem) VALUES ('$nome','$path')");
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Palestrante cadastrado com sucesso!!")';
        echo '</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Style/styleFormsTemp.css">
    <title>Formulário Palestrante</title>
</head>

<body>
    <div class="formsPalestrante">
        <div class="logo">
            <img src="../../Assets/Imgs/hubinnovation.jpeg" alt="Teste">
        </div>
        <div class="box">
            <form action="formsPalestrante.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend><b>Fórmulário Palestrante</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input name="imagem" type="file" />
                    </div>

                    <br><br>

                    <input type="submit" name="submit" id="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>
