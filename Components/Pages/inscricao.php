<?php
include '../../BD/conexao.php';
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$cadsuccess = false;
//recebendo cadastro do usuario
if (isset($_POST['botaoCadastrar'])) {
    if (!empty($_POST['idPalestra']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['fone'])  && !empty($_POST['genero'])  && !empty($_POST['data_nasc'])  && !empty($_POST['cpf'])  && !empty($_POST['lgpd'])) {

        $id_palestra = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'idPalestra', FILTER_SANITIZE_NUMBER_INT));
	$id_horario = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'idHorario', FILTER_SANITIZE_NUMBER_INT));
        $participante = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $email = mysqli_real_escape_string($conexao,  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $fone = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT));
        $genero = mysqli_real_escape_string($conexao, $_POST['genero']);
        $data = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
        $cpf = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT));
        $info = true;
        $lgpd = true;

	$buscaCPF = "SELECT usuario.nome,usuario.cpf FROM `usuario`
        INNER JOIN `palestra`
        WHERE usuario.cpf = $cpf and usuario.id_palestra = palestra.id_palestra and palestra.dia_palestra = $id_horario";

        $validaCPF = mysqli_query($conexao, $buscaCPF);
        $rowsCPF = mysqli_num_rows($validaCPF);

        if ($rowsCPF >= 1) {
            $message = '<script language="javascript"> alert("Usuário já cadastrado em outra atividade no mesmo horário!!")</script>';
            echo '<meta http-equiv="refresh" content="0.2; url=../../Pages/index.php">';
            die($message);
        }


        $sql = "INSERT INTO `usuario` (nome, cpf, data_nasc, email, sexo, telefone, info, lgpd, id_palestra)
        VALUES ('$participante','$cpf','$data','$email','$genero','$fone','$info','$lgpd','$id_palestra')";

        $result = mysqli_query($conexao, $sql);
        $idParticipante = mysqli_insert_id($conexao);


	$sql2 = "SELECT usuario.nome,usuario.email,palestra.nome as palestra,palestra.sala,palestra.dia_palestra FROM `usuario` INNER JOIN palestra WHERE usuario.id_palestra = palestra.id_palestra AND usuario.id_usuaio = $idParticipante";
        $result2 = mysqli_query($conexao, $sql2);
        $cadsuccess = true;

        //var_dump($result2);

        if ($cadsuccess) {
            while ($row = mysqli_fetch_assoc($result2)) {
                $nome = $row['nome'];
                $contato = $row['email'];
                $inscricao = utf8_decode($row['palestra']);
                $sala = $row['sala'];
                $dia_palestra = $row['dia_palestra'];
            }
        }

        $data = $dia_palestra;
        if ($data == 1) {
            $data = "25/10/2022 às 19hs";
        } elseif ($data == 2) {
            $data = "25/10/2022 às 20h30";
        } elseif ($data == 3) {
            $data = "26/10/2022 às 13h";
        } else {
            $data = "26/10/2022 às 19hs";
        }

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->CharSet = 'UTF-8';
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'fabrica.hub.academy@gmail.com';                     //SMTP username
            $mail->Password   = 'vagoylhbhsblurqt';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('fabrica.hub.academy@gmail.com', 'HUB INNOVATION');
            $mail->addAddress($contato, $nome);     //Add a recipient
            $mail->addReplyTo('fabrica.hub.academy@gmail.com', 'HUB INNOVATION');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'HUB INNOVATION';

         
        
                    //Configurando a mensagem para ser enviada
            $enviaMsg = ' Olá ' . $nome . '! Seja bem-vindo ao Hub Innovation!!!
               Você acaba de se inscrever no Encontro: <b>' .  $inscricao . ' na sala: ' . $sala . ' no dia: ' . $data . ' </b> Esperamos por você!!!!<br> 
               Senac Hub Academy';

            $mail->Body = $enviaMsg;

            $mail->send();
            echo '<script language="javascript">';
            echo 'alert("Cadastrado realizado com sucesso!!")';
            echo '</script>';

            echo '<meta http-equiv="refresh" content="0.2; url=../../Pages/index.php">';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
