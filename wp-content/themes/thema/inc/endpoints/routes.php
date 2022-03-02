<?php

/* Usuario POST */
function registrar_api_usuario_post()
{
    register_rest_route('api', '/usuario', array(
        array(
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => 'api_usuario_post',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_usuario_post');

/* Usuario GET */
function registrar_api_usuario_get()
{
    register_rest_route('api', '/usuario', array(
        array(
            'methods' => WP_REST_Server::READABLE,
            'callback' => 'api_usuario_get',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_usuario_get');

/* Usuario PUT */
function registrar_api_usuario_put()
{
    register_rest_route('api', '/usuario', array(
        array(
            'methods' => WP_REST_Server::EDITABLE,
            'callback' => 'api_usuario_put',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_usuario_put');

/* Produto POST */
function registrar_api_produto_post()
{
    register_rest_route('api', '/produto', array(
        array(
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => 'api_produto_post',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_produto_post');