<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_COOKIE['token'])) {

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );

    $url = "https://graph.facebook.com/me?fields=first_name,last_name,email,gender,picture.type(large)&access_token=" . $_COOKIE['token'];

    $my_var = file_get_contents($url, false, stream_context_create($arrContextOptions));

    $my_var2 = json_decode($my_var, TRUE);
    echo '<br>';
    echo $my_var2['first_name'];
    echo ' ';
    echo $my_var2['last_name'];
    echo '<br>';
    echo $my_var2['email'];
    echo '<br>';
    echo $my_var2['id'];
    $er = $my_var2['picture']['data'];
    echo '<br>';
    echo '<img src="';
    echo $er['url'];
    echo '" alt="Smiley face" height="200" width="200">';
} else {
    echo 'access token not set';
}
                                

                            