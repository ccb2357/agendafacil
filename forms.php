<?php
    require 'vendor/autoload.php';

    function email(array $data) : void {
        $mail = new PHPMailer\PHPMailer\PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'agendafacilhow@gmail.com';
        $mail->Password = 'peyuspixtblecjel';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('agendafacilhow@gmail.com', 'Agenda Fácil');
        $mail->addAddress($data['email'], $data['nome']);
        $mail->isHTML(true);
        $mail->Subject = $data['titulo'];
        $mail->Body = $data['body'];
        $mail->send();
    }

    $acao = $_POST['acao'];
    if($acao == 'agendamento'){
        $resultado = ['status' => false];
        if(empty($_POST['data'])){
            $resultado['erro'] = 'Informe a data!';
        }
        if(empty($_POST['telefone'])){
            $resultado['erro'] = 'Informe a telefone!';
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $resultado['erro'] = 'Email inválido!';
        }
        if(empty($_POST['nome'])){
            $resultado['erro'] = 'Informe o nome!';
        }
        if(empty($_POST['empresa'])){
            $resultado['erro'] = 'Informe a empresa!';
        }
        if(!isset($resultado['erro'])){
            $_POST['titulo'] = 'Agendamento Enviado';
            $_POST['body'] = sprintf(
                '<h4>Olá %s. <br><br>Seu agendamento na empresa %s para o dia %s às %s foi enviado.<br><br> Entraremos em contato pelo telefone %s para fazer a confirmação.</h4>', 
                $_POST['nome'],
                $_POST['empresa'],
                date('d/m/Y', strtotime($_POST['data'])),
                date('H:i', strtotime($_POST['data'])),
                $_POST['telefone'],
            );
            email($_POST);
            $resultado['status'] = true;
        }
        echo json_encode($resultado);
    }

    if($acao == 'contato'){
        $resultado = ['status' => false];
        if(empty($_POST['mensagem'])){
            $resultado['erro'] = 'Informe a mensagem!';
        }
        if(empty($_POST['telefone'])){
            $resultado['erro'] = 'Informe a telefone!';
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $resultado['erro'] = 'Email inválido!';
        }
        if(empty($_POST['nome'])){
            $resultado['erro'] = 'Informe o nome!';
        }
        if(empty($_POST['ramo'])){
            $resultado['erro'] = 'Informe o ramo!';
        }
        if(!isset($resultado['erro'])){
            $_POST['titulo'] = 'Mensagem Recebida';
            $_POST['body'] = sprintf(
                '<h4>Olá %s. <br><br>Recebemos a sua mensagem: <br>%s <br><br> Logo entraremos em contato pelo telefone %s para tirar suas dúvidas a respeito do nosso sistema de agendamentos para o seu ramo de %s.</h4>', 
                $_POST['nome'],
                $_POST['mensagem'],
                $_POST['telefone'],
                $_POST['ramo'],
            );
            email($_POST);
            $resultado['status'] = true;
        }
        echo json_encode($resultado);
    }