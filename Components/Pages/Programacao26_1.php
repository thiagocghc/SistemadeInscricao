<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação</title>
    <link rel="stylesheet" href="../Styles/style.css">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Styles/resets.css" />
    <link rel="stylesheet" href="../NavBar/navBarStyle.css" />
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="stylesheet" href="../../index.css" />

    <!-- Scrips -->
    <script src="./script.js" defer></script>
    <script src="../Components/Modal/modalScript.js" defer></script>
    <script src="./Javascript/loadData.js" defer type="module"></script>
    <script src="./onPageLoad.js" defer></script>



</head>

<body>

    <header id="header">
        <nav class="navigationBar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list iconeMenu" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
            <div class="menu">
                <button class="btnNav" type="button" id="btnHome" onclick="location.href='../../Pages/index.php'">HOME</button>
                <button class="btnNav" type="button" id="btnSobreEvento" onclick="location.href='../../Pages/index.php'">PROGRAMAÇÃO</button>
                <button class="btnNav" type="button" id="btnPalestrantes" onclick="location.href='../../Pages/index.php'">APOIADORES</button>
            </div>
        </nav>
    </header>

  <div id="sessaoDosCards">
        <div id="estiloTitulo">
            <div>
                <img src="../../Assets/Imgs/logo.png" alt="Logo" width='260px'>
                <br><br>
            </div>
            <div>
                <h2 id="tituloInsCon">Programação e Conexões</h2>
                <h2 id="tituloInsCon">26 de Outubro de 2022 às 13:00 hrs</h2>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <?php
        include '../../BD/conexao.php';
        $sql = "SELECT palestrante.id_palestrante,palestrante.nome as nome_palestrante,palestrante.imagem,palestra.id_palestra,palestra.nome as palestra,palestra.descricao,palestra.vagas 
            FROM `palestrante` INNER JOIN `palestra` 
            WHERE palestrante.id_palestrante = palestra.id_palestrante and palestra.dia_palestra =3";
        $result = mysqli_query($conexao, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_palestrante'];
                $nome = utf8_decode($row['nome_palestrante']);
                $foto = $row['imagem'];
                $id_palestra = $row['id_palestra'];
                $palestra = utf8_decode($row['palestra']);
                $descricao = utf8_decode($row['descricao']);
                $vagas = $row['vagas'];

                $buttonLink = '<a href="cadastro.php?palestra=' . $id_palestra . '&horario=3" class="btnPalestrante">Inscreva-se</a>';

                if ($vagas <= 0) {
                    $vagas = 0;
                    $buttonLink = '<a href="#" class="btnPalestranteDisable">INSCRIÇÕES ENCERRADAS</a>';
                }

                echo '<div class="card">
                <img src=" ' . $foto . ' " alt="Palestrante">
                <div class="info">
                    <h1> ' . $nome . ' </h1>
                    <p> ' . $palestra . ' ​</p> <span> Vagas  ' . $vagas . '</span><br><br><br>
                    ' . $buttonLink . '
                </div>
                </div>  ';
            }
        }
        ?>
    </div>
</body>

</html>
