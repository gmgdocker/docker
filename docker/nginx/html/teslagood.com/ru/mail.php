<?php
session_start();

if (isset($_POST['email'])){
    $check['exist'] = false;

    $_SESSION['__udata']['email'] = sanitize($_POST['email']);
    $_SESSION['__udata']['phone'] = sanitize($_POST['phone']);
    $_SESSION['__udata']['name'] = sanitize($_POST['name']);
    $_SESSION['__udata']['country'] = sanitize($_POST['country']);
    $_SESSION['__udata']['num'] = 'tsgru'.sanitize($_POST['num']);
    $_SESSION['__udata']['lang'] = 'Russian';


    if (strlen($_SESSION['promo']) > 1) {
        $_SESSION['__udata']['promo'] = sanitize($_SESSION['promo']);
    }
//    else {
//        $_SESSION['__udata']['promo'] = '222';
//    }

    $filepath = 'first_email.txt';
    $fo = fopen($filepath, 'a+');
    fwrite($fo, $_SESSION['__udata']['name'] . ' : ' . $_SESSION['__udata']['email'] . ' : ' . $_SESSION['__udata']['country'] . ' : ' . $_SESSION['__udata']['phone'] . ' : ' . $_SERVER["REMOTE_ADDR"] . ' : '.$_SESSION['__udata']['promo'].' : '.date('j.n.Y H.i').PHP_EOL);
    fclose($fo);

    if (!$check['exist']) {
        include $_SERVER['DOCUMENT_ROOT']."/includes/mail.php";

        if (!$check['exist']){

            $filepath = 'last_email.txt';
            $fo = fopen($filepath, 'a+');
            fwrite($fo, $_SESSION['__udata']['name'] . ' : ' . $_SESSION['__udata']['email'] . ' : ' . $_SESSION['__udata']['country'] . ' : ' . $_SESSION['__udata']['phone'] . ' : ' . $_SERVER["REMOTE_ADDR"] . ' : '.$_SESSION['__udata']['promo'].' : '.date('j.n.Y H.i').PHP_EOL);
            fclose($fo);

            session_destroy();
        }
    }

    echo json_encode($check);
}

function sanitize($data)
{
    return htmlspecialchars(trim($data));
}