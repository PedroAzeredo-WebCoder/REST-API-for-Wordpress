<?php

function api_usuario_get($request)
{

    $user = wp_get_current_user();
    return rest_ensure_response($user);
}
