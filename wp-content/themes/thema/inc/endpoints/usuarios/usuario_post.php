<?php

function api_usuario_post($request)
{

    $nome = sanitize_text_field($request['nome']);
    $email = sanitize_email($request['email']);
    $senha = sanitize_text_field($request['senha']);
    $nome = sanitize_text_field($request['nome']);
    $rua = sanitize_text_field($request['rua']);
    $cep = sanitize_text_field($request['cep']);
    $numero = sanitize_text_field($request['numero']);
    $bairro = sanitize_text_field($request['bairro']);
    $cidade = sanitize_text_field($request['cidade']);
    $estado = sanitize_text_field($request['estado']);


    $user_exists = username_exists($email);
    $email_exists = email_exists($email);

    if (!$user_exists && !$email_exists && !empty($email) && !empty($nome)) {
        $user_id = wp_create_user($nome, $senha, $email);


        $response = array(
            'ID' => $user_id,
            'display_name' => $nome,
            'first_name' => $nome,
            'role' => 'subcriber'
        );

        wp_update_user($response);

        update_user_meta($user_id, 'rua', $rua);
        update_user_meta($user_id, 'cep', $cep);
        update_user_meta($user_id, 'numero', $numero);
        update_user_meta($user_id, 'bairro', $bairro);
        update_user_meta($user_id, 'cidade', $cidade);
        update_user_meta($user_id, 'estado', $estado);

    } else {
        $response = new WP_Error('email', 'Desculpe este e-mail ja está sendo usado.', array('status' => 403));
    }

    return rest_ensure_response($response);
}
