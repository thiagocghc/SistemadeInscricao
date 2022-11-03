<?php
include '../../BD/conexao.php';
//recebendo a palestra selecionada
$id_palestra = mysqli_real_escape_string($conexao, filter_input(INPUT_GET, 'palestra', FILTER_SANITIZE_NUMBER_INT));
$id_horario = mysqli_real_escape_string($conexao, filter_input(INPUT_GET, 'horario', FILTER_SANITIZE_NUMBER_INT));

//buscando os dados da palestra e do palestrante
$sql = "SELECT palestra.nome as palestra,palestra.descricao,palestrante.nome as palestrante,palestrante.imagem
   FROM `palestra` INNER JOIN `palestrante`
   WHERE palestra.id_palestra = $id_palestra AND palestra.id_palestrante = palestrante.id_palestrante";
$result = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $nome_palestra =  utf8_decode($row['palestra']);
    $descricao =  utf8_decode($row['descricao']);
    $nome_palestrante =  utf8_decode($row['palestrante']);
    $foto_palestrante =  utf8_decode($row['imagem']);
}
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Inscrição</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        <!-- Styles -->

        <link rel="stylesheet" href="../Styles/resets.css" />
        <link rel="stylesheet" href="../NavBar/navBarStyle.css" />
        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="stylesheet" href="../Styles/Style/styleForms.css">

   

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
                    <h2 id="tituloInsCon">Ótima Escolha!</h2>
                    <h2 id="tituloInsCon">Faça Sua Inscrição Logo Abaixo.</h2>
                </div>
            </div>
        </div>
        <div class="formsUsuario">
            <div class="teste">                
                    
                        <div class="cardForms">
                            <div>
                                <img src="<?php echo $foto_palestrante; ?>" alt="Palestrante">
                            </div>
                            <div class="infoForms">
                                <h1>
                                    <?php echo $nome_palestrante; ?> </h1><br>
                                <h2>
                                    <?php echo $nome_palestra; ?> ​</h2><br>
                                <p>
                                    <?php echo $descricao; ?> </p>
                            </div>
                        </div>
      
                  
              

                <div class="dadosFormulario">
                    <div class="box">
                        <form action="inscricao.php" method="POST">
                            <fieldset>
                                <legend><b>Fórmulário de Inscrição</b></legend>
                                <br>
                                <div class="inputBox">
                                    <input type="hidden" name="idPalestra" value="<?php echo $id_palestra ?>">
					 <input type="hidden" name="idHorario" value="<?php echo $id_horario ?>">
                                    <input type="text" name="nome" id="nome" class="inputUser" required>
                                    <label for="nome" class="labelInput">Nome completo</label>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <input type="text" name="email" id="email" class="inputUser" required>
                                    <label for="email" class="labelInput">Email</label>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <input type="number" maxlength="11" name="fone" id="fone" class="inputUser" required>
                                    <label for="fone" class="labelInput">Telefone</label>
                                </div>

                                <div class="inputBox">
                                    <label for="genero" class="labelRadiobox">Sexo</label>
                                    <div class="radiobox">
                                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                                        <label for="feminino">Feminino</label>
                                        <br>
                                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                                        <label for="masculino">Masculino</label>
                                        <br>
                                        <input type="radio" id="outro" name="genero" value="outro" required>
                                        <label for="outro">Outro</label>
                                    </div>

                                    <br><br>
                                </div>

                                <div class="inputBox Data">
                                    <label for="data_nasc" class="labelData">Data de Nascimento</label>
                                    <div class="radiobox">
                                        <input type="date" name="data_nasc" id="data_nasc" required>
                                    </div>
                                    <br><br>
                                </div>

                                <div class="inputBox">
                                    <input type="number" name="cpf" id="cpf" maxlength="11" class="inputUser" required>
                                    <label for="cpf" class="labelInput">CPF</label>
                                </div>
                                <br><br>

                                <div class="inputBox">
                                    <input type="checkbox" name="lgpd" id="lgpd" required>
                                    <label for="lgpd" class="labelcheck">Ao enviar este formulário, você permite que seus dados
                                pessoais sejam processados em nossas plataformas educacionais.</label>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <input type="checkbox" name="info" id="info" required>
                                    <label for="info" class="labelcheck">Você concorda em receber informações a respeito de cursos
                                relacionados ao Senac.</label>
                                </div>
                                <br><br>
                                <div id="botoes">
                                    <input type="reset" name="cancelar" id="reset" value="Cancelar" class='btn_incricao btn_cancelar'>
                                    <input type="submit" name="botaoCadastrar" id="submit" value="Enviar" class='btn_incricao'>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <script type="text/JavaScript">



        document.querySelectorAll('input[type="number"]').forEach(input =>{

            input.oninput = () => {

                if(input.value.length > input.maxLength) input.value = input.value.slice(0,input.maxLength);

        };

    });



    var mail = document.getElementById('email');

    mail.addEventListener('focusout', ()=>{

        var re = /\S+@\S+\.\S+/;

        if(!re.test(email.value)){

            alert("E-mail Inválido! Digite novamente!")

        }

    })



    var cpf = document.getElementById('cpf');
    cpf.addEventListener('focusout', ()=>{
        if(!validaCPF(cpf.value)){
            alert("CPF Inválido! Digite novamente!")
        }
    })

    function validaCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}

  </script>


    </body>

    </html>
