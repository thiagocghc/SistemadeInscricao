<?php
if (isset($_POST['submit'])) {
    include '../../BD/conexao.php';
    $nome =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
    $descricao =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'info_palestra', FILTER_SANITIZE_SPECIAL_CHARS));
    $sala =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_NUMBER_INT));
    $vagas =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'vagas', FILTER_SANITIZE_NUMBER_INT));
    $id_palestrante =  mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'id_palestrante', FILTER_SANITIZE_NUMBER_INT));
    $dia_palestra =  mysqli_real_escape_string($conexao, $_POST['dia_palestra']);

    $result = mysqli_query($conexao, "INSERT INTO palestra (nome,descricao,sala,vagas,id_palestrante,dia_palestra) VALUES 
        ('$nome','$descricao','$sala','$vagas','$id_palestrante','$dia_palestra')");

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
    <link rel="stylesheet" href="../Style/styleFormsTemp.css">
    <title>Formulário Palestra</title>
</head>

<body>
    <div class="formsPalestrante">
        <div class="logo">
            <img src="../IMG/LogosOrganização/Marcar hub_camiseta (1).png" alt="">
        </div>
        <div class="box">
            <form action="formsPalestra.php" method="POST">
                <fieldset>
                    <legend><b>Fórmulário Palestra</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome da Palestra:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="info_palestra" id="info_palestra" class="inputUser" required>
                        <label for="info_palestra" class="labelInput">Descrição da Palestra:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="sala" id="sala" class="inputUser" required>
                        <label for="sala" class="labelInput">Sala:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="vagas" id="vagas" class="inputUser" required>
                        <label for="vagas" class="labelInput">Vagas:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="id_palestrante" id="id_palestrante" class="inputUser" required>
                        <label for="id_palestrante" class="labelInput">Palestrante:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="dia_palestra" id="dia_palestra" class="inputUser" required>
                        <label for="dia_palestra" class="labelInput">Dia da Palestra 1-25.1 | 2-25.2 | 3-26 Tarde | 4-26 Noite</label>
                    </div>
                    <br><br>

                    <input type="submit" name="submit" id="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>