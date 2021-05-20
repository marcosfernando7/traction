<?php
    if(isset($_POST['enviar'])) :

        $dados = array(
            'nome'      => $_POST['nome'],
            'email'     => $_POST['email'],
            'phone'     => $_POST['phone'],
            'birthday'  => $_POST['birthday'],
            'role'      => $_POST['area_atuacao']
        );

        $json = json_encode($dados);

        $ch = curl_init('https://octo.hk/sKUHeHE0HqtZWxJmAqQR');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json))
        );

        if($ch) :
            header('Location: ' . get_site_url() . '/obrigado');
        endif;
    endif;
?>