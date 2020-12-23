<?php
/*
    Plugin name: write message on posts
    Plugin uri: https://oceanbigdata.com.br
    Description: Esse plugin escreve uma mensagem ao final de cada post.
    Version: 1.0
    Author: Dassaev Lima
    Author uri: https://dassaev.netlify.app/
    License: GPLv2 of later 
 */

//criando uma função que insere um texto padrão em todos os post do site
//é importante que todas as funções tenham um ellas que é um prefixo que identifica que é uma função do mesmo
// plugin para não confundir com as funcoes de outros plugins ou do próprio wordpress
function mp_write_msg_post ($mp_post){
    if ( is_single() ){
    $mp_msg = "Aqui a mensagem padrão para os posts.";
    $mp_result = "<p>$mp_msg</p>";
    $mp_result = $mp_post . "\n" . $mp_msg;
    return $mp_result;
    }else{
    return $mp_post;
}
}

add_filter('the_content','mp_write_msg_post');
