<?php
    require_once('vendor/autoload.php');
    $google = new Google_Client();

    $google->setClientId('845476835176-o5283ksb8a4k5daij277fk67thr76h0e.apps.googleusercontent.com');

    $google->setClientSecret('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');

    $google->setRedirectUri('http://localhost/food%20website/googleapi/profile.php');

    $google->addScope('email');

    $google->addScope('profile');

    session_start();
?>