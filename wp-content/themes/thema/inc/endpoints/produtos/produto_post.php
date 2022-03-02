<?php

function api_produto_post($request)
{
    $user = wp_get_current_user();
    $user_id = $user->ID;

    if ($user_id != 0) {

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

        $email_exists = email_exists($email);

        if (!$email_exists || $email_exists === $user_id) {

            $response = array(
                'ID' => $user_id,
                'display_name' => $nome,
                'first_name' => $nome,
                'user_pass' => $senha,
                'user_email' => $email
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
    } else {
        $response = new WP_Error('permissao', 'Usuário não possui permiassão.', array('status' => 401));
    }
    return rest_ensure_response($response);
}
