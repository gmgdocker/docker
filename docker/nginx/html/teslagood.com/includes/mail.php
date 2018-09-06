<?php

include $_SERVER['DOCUMENT_ROOT']."/includes/promos.php";

$_SESSION['__udata']['address_url'] = 'https://teslagood.com';

function send_CRM_forexgrand(){

    $api_url = 'https://crm.forexgrand.com/api/lead';

    $jsonObj = array(
        "phone_number" => $_SESSION['__udata']['phone'],
        "first_name" => $_SESSION['__udata']['name'],
        "last_name" => $_SESSION['__udata']['name'],
        "address" => $_SESSION['__udata']['address_url'],
        "email" => $_SESSION['__udata']['email'],
        "language" => $_SESSION['__udata']['lang'],
        "country" => $_SESSION['__udata']['country'],
        "token" => getToken($_SESSION['__udata']['promo']),
        "RegistrationComments" => $_SESSION['commenturi'],
        "landingPageReferer" => $_SESSION['__udata']['address_url'],
    );

    if (isset($_COOKIE['Btag'])) {
        $jsonObj["Btag"] = $_COOKIE['Btag'];
    }

    $curl = curl_init($api_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($jsonObj));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "cache-control: no-cache",
        "content-type: application/x-www-form-urlencoded"
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function send_wetrafficasa()
{
    $api_url = 'https://platform.wetrafficasa.com/api/signup/procform';
    $jsonObj = array(
        "ai"   => $_SESSION['__udata']['ai'],
        "ci"   => $_SESSION['__udata']['ci'],
        "gi"   => $_SESSION['__udata']['gi'],
        "userip" => $_SERVER["REMOTE_ADDR"],
        "lastname" => $_SESSION['__udata']['name'],
        "email" => $_SESSION['__udata']['email'],
        "password" => '',
        "firstname" => $_SESSION['__udata']['name'],
        "phone" => $_SESSION['__udata']['phone'],
        "sub" => !empty($_SESSION['__udata']['sub']) ? $_SESSION['__udata']['sub'] : '222',
        "MPC_1" => $_SESSION['commenturi'],
        "MPC_2" => getToken($_SESSION['__udata']['sub']),
        "MPC_3" => $_SESSION['__udata']['MPC_3'],
        "MPC_4" => $_SESSION['__udata']['MPC_4'],
        "fallback" => "false",
        "source" => $_SESSION['__udata']['address_url']
    );

    if ($_SESSION['__udata']['promo'] == '279'){
        $log = 'CPAelectro';
        $pass = 'CPAelectro';
    } else {
        $log = 'InLeadsWeTrust';
        $pass = 'InLeadsWeTrust';
    }

    $curl = curl_init($api_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($jsonObj));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "cache-control: no-cache",
        "content-type: application/json",
        "x-api-key: 2643889w34df345676ssdas323tgc738",
        "x-trackbox-password: ".$pass,
        "x-trackbox-username: ".$log
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

if(!empty($_SESSION['__udata']['gi'])){
    $wetrafficasa = send_wetrafficasa();
    $wetrafficasa = json_decode($wetrafficasa);

    if (!$wetrafficasa->status){
        $check = [];
        $check['exist'] = true;
        $check['errorMessage'] = 'Phone number is wrong';
    }
} else {
    $check['url'] = str_replace('"','',send_CRM_forexgrand());
}