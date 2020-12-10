<?php


    $book   = $_POST['book'];
    $token  = $_POST['token'];
    $action = $_POST['action'];

    $curlData = array(
        'secret' => '6LeyOgAaAAAAANtvZZUr1EX_3dv5dMpE2Ql1q9K2',
        'response' => $token
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curlData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curlResponse = curl_exec($ch);

    $captchaResponse = json_decode($curlResponse, true);

    if ($captchaResponse['success'] == '1' && $captchaResponse['action'] == $action && $captchaResponse['score'] >= 0.5 && $captchaResponse['hostname'] == $_SERVER['SERVER_NAME']) {
        echo json_encode(array('success' => 'true'));
    } else {
        echo json_encode(array('success' => 'false'));
    }
