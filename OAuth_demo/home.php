<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //Checks if action value exists
//$response = http_get("https://graph.facebook.com/v2.8/me?fields=id", array("timeout"=>1), $info);
//print_r($info);
//$uri =  $_SERVER["REQUEST_URI"]; //it will print full url
//$uriArray = explode('/', $uri); //convert string into array with explode
//$id = $urlArray[1];
//if(isset($_GET['expires_in'])){
//$token=$_GET['expires_in'];
//echo $token;
//header("https://graph.facebook.com/v2.8/me?fields=id");} else {
//    echo 'variable not set';    
//}

            if(isset($_COOKIE['token']))
                            {
                              
        $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
                               

//                                        $user_details = "https://graph.facebook.com/me?fields=first_name,last_name,email,gender,picture.type(large)&access_token=".$_COOKIE['token'];
   $url= "https://graph.facebook.com/me?fields=first_name,last_name,email,gender,picture.type(large)&access_token=".$_COOKIE['token'];
//                                        $response = file_get_contents($user_details);
//                                        $response = json_decode($response);
//     $ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//// Set so curl_exec returns the result instead of outputting it.
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//// Get the response and close the channel.
//$response = curl_exec($ch);
//curl_close($ch);
//echo $response ;
   //$curl = curl_init();
// Set some options - we are passing in a useragent too here
//curl_setopt_array($curl, array(
//    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_URL => "https://graph.facebook.com/me?fields=first_name,last_name,email,gender,picture.type(large)&access_token=".$_COOKIE['token'],
//    CURLOPT_USERAGENT => 'User Agent X'
//));
// Send the request & save response to $resp
//$resp = curl_exec($curl);
// Close request to clear up some resources
//    echo $resp;
//curl_close($curl);
//   $response = http_get($url, array("timeout"=>1), $info);
//print_r($info);
$my_var = file_get_contents($url, false, stream_context_create($arrContextOptions));                           
echo $_COOKIE['token'];
echo $my_var;

//                                    if($response->email != null || $response->email != '')
//                                    {
//                                        session_set_cookie_params(300);
//                                        session_start();
//                                        session_regenerate_id();
//
//
//                                        setcookie('session_cookie', session_id(), time() + 300, '/');
//
//                                     
//
//                                        $res=$response->picture;
//                                        $res2=$res->data;
//                                        $string=$response->email."#".$response->first_name."#".$response->last_name."#".$response->gender."#".$res2->url;
//
//                                       
//
//                                    
//                                                exit;

                                    }
                                

                            